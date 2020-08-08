<?php

namespace Eventos\Http\Requests;

use Eventos\Models\Opcion;
use Illuminate\Foundation\Http\FormRequest;

class CreateOpcionRequest extends FormRequest
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
        return Opcion::$rules;
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'La opción de respuesta es obligatoria',
            'descripcion.max' => 'La descripción de la opción no puede exceder los 191 caracteres',
            'opcion.required' => 'La opción es obligatoria',
            'opcion.max' => 'La opción no puede exceder los 3 caracteres',
        ];
    }
}
