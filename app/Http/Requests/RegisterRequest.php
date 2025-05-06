<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'national_id' => 'required|min:4|max:16|regex:/^\d+$/|unique:users,national_id',
            'password' => 'required|confirmed|min:10|max:255',
            'name' => 'required|max:32',
            'lastname' => 'required|max:32',
            'city' => 'required|max:32',
            'address' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email|max:255',
            'phone' => 'required|regex:/^\+?[0-9\s\-\(\)]+$/|max:20|unique:users,phone'
        ];
    } 

}
