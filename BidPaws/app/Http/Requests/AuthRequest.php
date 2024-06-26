<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:4|max:100',
            'username' => 'required|string|min:5|max:100',
            'image' => 'required|image',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|string|min:8',
            'number_phone' => 'required|string|min:10', 
        ];
    }
    
}
