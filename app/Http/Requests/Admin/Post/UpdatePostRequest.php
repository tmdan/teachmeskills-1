<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'string|max:255',
            'content' => 'string',
            'description' => 'string',
            'category_id' => 'exists:categories,id',
            'image' => 'image',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'is_published' => 'nullable',
            'is_recommended' => 'nullable',
            'user_id' => 'nullable',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => $this->user()->id,
            'is_published' => $this->exists('is_published') ? true : false,
            'is_recommended' => $this->exists('is_recommended') ? true : false,
        ]);
    }
}
