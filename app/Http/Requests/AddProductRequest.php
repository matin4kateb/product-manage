<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AddProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this->all());
        
        return [
            'user_id'       => 'required|integer|exists:users,id',   // Check the foreign key
            'name'          => 'required|min:2|max:64',
            'price'         => 'required|numeric|between:0,999999.99',
            'description'   => 'max:255',
            'quantity'      => 'required|integer|max:999999'
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'Please select a seller.',
            'user_id.exists'   => 'The selected seller does not exist.',
            'name.required'      => 'Product name is required.',
            'price.between'      => 'Price must be between 0 and 999999.99.',
            'quantity.integer'   => 'Quantity must be an integer.'
        ];
    }
}
