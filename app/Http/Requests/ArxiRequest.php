<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArxiRequest extends FormRequest
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
            'id_Arxi_ekdosis_eggrafon'=>'required',
            'Arxi'=>'required',
            'Mark_del'=>'required',
        ];
    }
}
