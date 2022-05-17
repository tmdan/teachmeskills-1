<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'email' => ['email',
                'string',
                Rule::unique('users')->ignore($this->user->id),
            ],
            'avatar' => 'image|max:2048',
            'password' => 'string|nullable'
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
