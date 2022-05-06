<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image',
            'tags' => 'required|array',
            'tags.*' => 'required|exists:tags,id',
            'user_id' => 'required|nullable',
            'is_publish' => 'required|nullable',
            'is_recommended' => 'required|nullable',
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
