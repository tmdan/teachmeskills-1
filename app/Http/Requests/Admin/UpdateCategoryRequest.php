<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'заполните поле :attribute',
            'title.min' => 'минимум 3 символа',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Заголовок'
        ];
    }
}
