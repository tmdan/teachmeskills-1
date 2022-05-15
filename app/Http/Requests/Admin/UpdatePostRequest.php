<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
}
