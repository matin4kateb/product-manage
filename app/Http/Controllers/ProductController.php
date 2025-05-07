<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;

use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function add()
    {
        return view('product.add');
    }

    public function addAction(AddProductRequest $addRequest)
    {
        $user_id = $addRequest->validated('user_id');
        $user_id = (int) $user_id;
        
        // Authorize user
        if ( Auth::id() != $user_id ) // If user tries to add post as another ID
            abort(403);

        // Validate data
        Product::insert([
            'user_id' => Auth::id(),
            ...$addRequest->validated()
        ]);
        
        session()->flash('status', 'Product added successfully.');
        return redirect()->route('product.view');
    }

    public function deleteAction(Product $product)
    {
        if (Auth::id() != $product->user_id)    // authorize
            abort(403);

        $product->delete();
        // alert('Product deleted successfully.');
        
        session()->flash('status', 'Product deleted successfully.');
        return redirect()->route('product.view');
    }

    public function update(Product $product)
    {
        if (Auth::id() != $product->user_id)
            abort(403); // Authorize

        return view('product.update', compact('product'));
    }

    public function updateAction(Product $product, UpdateProductRequest $upRequest)
    {
        if (Auth::id() != $product->user_id)
            abort(403);

        $product->update([
            /* Validate data */
            ...$upRequest->validated()
        ]);
        
        session()->flash('status', 'Product updated successfully.');
        return redirect()->route('product.view');
    }

    public function viewProds()
    {
        $products = Product::all();
        return view('product.view', compact('products'));
    }

}