<?php

namespace Eventos\Http\Requests;

use Eventos\Models\Proyecto;
use Illuminate\Foundation\Http\FormRequest;

class CreateProyectoRequest extends FormRequest
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
        return Proyecto::$rules;
    }
}
