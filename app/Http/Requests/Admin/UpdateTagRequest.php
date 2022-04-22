<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTagRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'title' => 'Название тега'
        ];
    }
}
