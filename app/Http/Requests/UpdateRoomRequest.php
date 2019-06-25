<?php

namespace Kallfu\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Kallfu\Models\Room;

class UpdateRoomRequest extends FormRequest
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
        return Room::$rules;
    }
}
