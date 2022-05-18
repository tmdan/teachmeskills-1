<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAuthRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'regex:/\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}/',
                'unique:users',
            ],
            'password' => [
                'required',
                'string',
                'regex:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}/'
            ]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя',
            'email' => 'e-mail',
            'password' => 'пароль'
        ];
    }

}


