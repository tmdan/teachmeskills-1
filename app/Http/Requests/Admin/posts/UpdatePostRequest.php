<?php

namespace App\Http\Requests\Admin\posts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
        /*if ($this->request->get('is_recommended')=='on'){
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
        }*/

        $this->merge([
            //'is_recommended' => $is_recommended,
            //'is_publish' => $is_publish,
            'user_id' => Auth::user()->id,
            'is_publish' => $this->exists('is_publish') ? false : true,
            'is_recommended' => $this->exists('is_recommended') ? true : false,
            //'category_id' => $this->request->get('category_id'),
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
            'title' => 'string|max:255',
            'content' => 'string',
            'date' => 'required',
            'image' => 'nullable|image',
            'category_id' => 'exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'is_publish' => 'required|boolean',
            'is_recommended' => 'required|boolean',
            'description' => 'required',
        ];
    }
}
