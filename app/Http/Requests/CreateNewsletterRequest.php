<?php

namespace Kallfu\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsletterRequest extends FormRequest
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
            'email' => 'required|email|unique:newsletter,email',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El campo email es obligarorio',
            'email.email' => 'El formato del  email es incorrecto',
        ];
    }

}
