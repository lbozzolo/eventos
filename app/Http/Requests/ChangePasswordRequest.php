<?php

namespace Eventos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Eventos\User;

class ChangePasswordRequest extends FormRequest
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
        return User::$change_password_rules;
    }

    public function messages()
    {
        return [

            'password.required' => 'La nueva contaseña es obligatoria',
            'password.min' => 'La nueva contraseña debe tener mínimo 6 caracteres',
            'password_confirmation.required' => 'Debe repetir la contraseña para confirmarla',
            'password_confirmation.min' => 'La confirmación de la contraseña debe tener mínimo 6 caracteres',
            'password_confirmation.same' => 'La confirmación de la contraseña no coincide con la nueva contraseña indicada'

        ];
    }
}
