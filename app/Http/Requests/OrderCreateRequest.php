<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'digit' => 'required|numeric|min:6|max:9',
            'description' => 'nullable|string|max:1000',
            'status' => 'required|numeric',
        ];
        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        $messages = [
          'email.required' => 'Введите :attribute',
          'email.email' => 'Введите корректный :attribute',
          'password.required' => 'Введите :attribute',
          'password.min' => 'Минимальная длина пароля :min символов',
        ];
        return $messages;
    }

    /**
     * Get the custom attributes for the defined validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        $attributes = [
          'email' => 'email',
          'min' => 8,
        ];
        return $attributes;
    }
}
