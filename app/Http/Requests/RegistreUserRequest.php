<?php

namespace Eventos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Eventos\User;

class RegistreUserRequest extends FormRequest
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
            'ocupacion_id.required_without' => 'La ocupación es obligatoria',
            'ocupacion.required_without' => 'La ocupación es obligatoria',
            'name.required' => 'El nombre es obigatorio',
            'lastname.required' => 'El apellido es obligatorio',
            'email.required' => 'El email es obligarorio',
            'email.email' => 'El formato de email es inválido',
            'dni.required' => 'El dni es obligatorio',
            'dni.max' => 'El dni no puede exceder los 191 caracteres',
            'institucion.max' => 'La institución no puede exceder los 191 caracteres',
            'phone.required' => 'El teléfono es obligatorio',
            'phone.max' => 'El teléfono no puede exceder los 191 caracteres',
            'localidad.required' => 'La localidad es obligatoria',
            'localidad' => 'La localidad no puede exceder los 255 caracteres',
            'ocupacion_id' => 'required_without:ocupacion',
            'ocupacion' => 'required_without:ocupacion_id'
        ];
    }
}
