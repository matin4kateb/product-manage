@extends('layout')

@section('title', 'Update Product')

@section('content')
<section>
    <h2>Update Product</h2>
    <form action="{{ route('product.update', $product) }}" method="post">
        @csrf
        @method('PUT')

        <p><b>Product ID:</b> {{ $product->id }}</p>

        <label>New Product Name:</label>
        <input type="text" name="name" value="{{ $product->name }}">

        <label>New Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}">

        <label>New Description:</label>
        <textarea name="description" rows="4" cols="50">{{ $product->description }}</textarea>

        <label>New Quantity:</label>
        <input type="number" name="quantity" value="{{ $product->quantity }}">

        <button type="submit">Update Product</button>
    </form>
</section>
@endsection