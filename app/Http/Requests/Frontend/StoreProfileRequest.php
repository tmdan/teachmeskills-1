<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreProfileRequest extends FormRequest
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
            'name' => 'string|required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'password' => 'nullable|string',
            'avatar' => 'nullable|image',
            'status' => 'string|max:255|nullable',
        ];
    }
}
