<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email'=>'string|email|unique:users',
            'avatar'=>'image|max:2048',
            'name'=>'string|max:255',
            'password'=>'required'
        ];
    }
}
