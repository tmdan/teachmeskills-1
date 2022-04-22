<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


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
