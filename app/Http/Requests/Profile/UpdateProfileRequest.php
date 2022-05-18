<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'string|max:255',
            'email' => [
                'email',
                'string',
                'regex:/\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}/',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'avatar' => 'image|max:2048',
            /*'password' => [
                'string',
                'regex:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}/'
            ],*/
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
