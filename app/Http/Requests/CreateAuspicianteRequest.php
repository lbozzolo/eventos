<?php

namespace Eventos\Http\Requests;

use Eventos\Models\Auspiciante;
use Illuminate\Foundation\Http\FormRequest;

class CreateAuspicianteRequest extends FormRequest
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
        return Auspiciante::$rules;
    }
}
