<?php

namespace Eventos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CodigoRequest extends FormRequest
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
            'code' => 'required',
//            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Debe ingresar el código correspondiente',
            'g-recaptcha-response.required' => 'No se ha podido verificar que usted no sea un robot',
            'g-recaptcha-response.recaptcha' => 'No se ha podido verificar que usted no sea un robot',
        ];
    }

}
