<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|string|email',
            'password' => 'required|max:255|min:8'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Please Enter Your Name',
            'email.required'=>"Email Can't be Blank",
            'password.required'=>'Please Use Strong Password'
        ];
    }
}
