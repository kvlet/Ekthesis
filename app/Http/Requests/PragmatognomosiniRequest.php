<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PragmatognomosiniRequest extends FormRequest
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
            'id_diakrisi' => 'required',
            'id_grafeio' => 'required',
            'id_nomoi'  => 'required',
            'id_nomoi'  => 'required',
            'id'  => 'required',
            'id_company_pathon'   => 'required',
            'id_pathon'   => 'required',
        ];
    }
}
