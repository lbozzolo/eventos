<?php

namespace Eventos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdentificacionRequest extends FormRequest
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
            'email' => 'email|required',
//            'name' => 'max:20',
//            'lastname' => 'max:20',
            'code' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'El formato del email ingresado es incorrecto',
            'email.required' => 'El email es obligatorio',
//            'name.max' => 'El nombre no puede tener más de 20 caracteres',
//            'lastname.max' => 'El apellido no puede tener más de 20 caracteres',
            'code.required' => 'El código es obligarorio'
        ];
    }

}
