<?php

namespace Eventos\Http\Requests;

use Eventos\Models\Pregunta;
use Illuminate\Foundation\Http\FormRequest;

class CreatePreguntaRequest extends FormRequest
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
        return Pregunta::$rules;
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'La pregunta no puede estar vacía',
            'descripcion.max' => 'La pregunta no puede exceder los 191 caracteres',
        ];
    }
}
