<?php

namespace App\Http\Requests\Admin\posts;

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

    // в этой функции можно обработать валидационные данные до валидации.
    protected function prepareForValidation()
    {
        if ($this->request->get('is_recommended')=='on'){
            $is_recommended = true;
        }
        else{
            $is_recommended = false;
        }

        if ($this->request->get('is_publish')=='on'){
            $is_publish = true;
        }
        else{
            $is_publish = false;
        }

        $this->merge([
            'is_recommended' => $is_recommended,
            'is_publish' => $is_publish,
            'users_id' => 1,
        ]);
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
            'content' => 'required',
            'date' => 'required',
            'image' => 'nullable|image',
            //'category_id' => 'exists:category,id',
            'users_id' => 'required|exists:users,id',
            'is_publish' => 'required|boolean',
            'is_recommended' => 'required|boolean',
        ];
    }
}
