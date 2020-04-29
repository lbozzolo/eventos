<?php

namespace Eventos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'company' => 'max:191',
            'message' => 'max:1000',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligarorio',
            'email.email' => 'El formato del  email es incorrecto',
            'phone.required' => 'El teléfono es obligatorio',
            'phone.numeric' => 'El teléfono debe ser un número, sin letras ni caracteres especiales',
            'company.max' => 'El campo de empresa no puede superar los 191 caracteres',
            'message.max' => 'El mensaje no puede exceder los 1000 caracteres',
            'g-recaptcha-response.required' => 'No se ha podido verificar que usted no sea un robot',
            'g-recaptcha-response.recaptcha' => 'No se ha podido verificar que usted no sea un robot',
        ];
    }

}
