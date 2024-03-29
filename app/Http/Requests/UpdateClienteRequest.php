<?php

namespace Eventos\Http\Requests;

use Eventos\Models\Cliente;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
            'nombre' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
        ];

    }
}
