<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyRequest extends FormRequest
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
            'title' => 'required',
            'body' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
           
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Please Enter Title',
            'body.required'=>'Enter Your Content',
            'name.required'=>'Please Enter Your Name',
            'email.required'=>"Email Can't be Blank",
            'password.required'=>'Please Use Strong Password'
        ];

    }
}
