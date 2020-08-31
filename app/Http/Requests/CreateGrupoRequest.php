<?php

namespace Eventos\Http\Requests;

use Eventos\Models\Grupo;
use Illuminate\Foundation\Http\FormRequest;

class CreateGrupoRequest extends FormRequest
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
        return Grupo::$rules;
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.max' => 'El nombre no puede exceder los 191 caracteres',
        ];
    }
}
