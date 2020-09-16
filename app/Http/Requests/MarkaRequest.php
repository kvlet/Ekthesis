<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkaRequest extends FormRequest
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
            'id_markes'=>'required',
            'marka'=>'required',
            'Mark_del'=>'required',
        ];
    }
}
