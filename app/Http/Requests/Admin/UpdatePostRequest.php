<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'image' => 'image:max:5000',
            'tags' => 'array',
            'tags.*' => 'required_with:tags|exists:tags,id',
            'user_id' => 'required|nullable',
            'is_publish' => 'required|boolean|nullable',
            'is_recommended' => 'required|boolean|nullable',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1,
            'is_publish' => $this->exists('is_publish') ? true : false,
            'is_recommended' => $this->exists('is_recommended') ? true : false,
        ]);
    }
}
