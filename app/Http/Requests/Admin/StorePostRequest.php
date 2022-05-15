<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content' => 'required|string',
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image',
            'tags' => 'required|array',
            'user_id' => 'nullable',
            'is_publish' => 'boolean|nullable',
            'is_recommended' => 'boolean|nullable',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => 2
        ]);
    }
}
