<?php

namespace Eventos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Eventos\User;

class CreateInscriptoRequest extends FormRequest
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
        return User::$rulesInscripcion;
    }

    public function messages()
    {
        return [

            'name.required' => 'El campo nombre es obligatorio',
            'lastname.required' => 'El campo apellido es obligatorio',
            'phone.max' => 'El campo teléfono es incorrecto'

        ];
    }
}
