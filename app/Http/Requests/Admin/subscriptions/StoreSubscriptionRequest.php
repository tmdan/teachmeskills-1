<?php

namespace App\Http\Requests\Admin\subscriptions;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriptionRequest extends FormRequest
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
            'email' => 'required|email|unique:subscriptions',
            'token' => 'string|nullable',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([

            'token' => $this->exists('_token') ? null : "",

        ]);
    }
}
