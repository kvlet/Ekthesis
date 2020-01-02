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
            'Date_atiximatos' => 'date',
            'Date_eksetasis' => 'date',
            'Date_dikasimou' => 'date',
            'Date_paradosis' => 'date',
            'Fpa' => 'numeric',
            'Ekpt_parts' => 'numeric',
            'Ekpt_jobs' => 'numeric',
            'value_car_pathon' => 'numeric',
            'Valid' => 'in:true,false',
            'Simpliromatiki' => 'in:true,false',
            'Sap' => 'in:true,false',
            'partially_lock' => 'in:Ναι,Όχι',
            'total_lock' => 'in:Ναι,Όχι',
        ];
    }
}
