<?php

namespace Kallfu\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreReservaRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'arival_date' => '',
            'departure_date' => '',
            'chooseAdults' => '',
            'chooseChildren' => '',
            'message' => 'max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligarorio',
            'email.email' => 'El formato del  email es incorrecto',
            'message.max' => 'El mensaje no puede exceder los 1000 caracteres',
        ];
    }
    
}
