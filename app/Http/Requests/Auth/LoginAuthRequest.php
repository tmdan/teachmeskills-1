<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginAuthRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'regex:/\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}/',
            ],
            'password' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'e-mail',
            'password' => 'пароль'
        ];
    }
}
