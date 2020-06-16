<?php

namespace Eventos\Http\Requests;

use Eventos\Models\Codigo;
use Illuminate\Foundation\Http\FormRequest;

class CreateCodigosRequest extends FormRequest
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
        return Codigo::$rules;
    }

    public function messages()
    {
        return Codigo::$messages;
    }
}
