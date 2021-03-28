<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EsodaOximaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_esoda'=>'required',
            'id_accident_place'=>'required',
            'km'=>'required',
            'value'=>'required',
            'id_company'=>'required',
            'id_ekthesis'=>'required',
            'mark_del'=>'in:Ναι,Όχι',
        ];
    }
}
