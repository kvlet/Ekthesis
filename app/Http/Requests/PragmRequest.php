<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PragmRequest extends FormRequest
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
            'id'  => 'required',
            'id_company_pathon'   => 'required',
            'id_pathon'   => 'required',
            'Date_atiximatos' => 'required|date',
            'id_oximatos_pathon' => 'required_without_all:Object',
            'Object' => 'required_without_all:id_oximatos_pathon',
            'Date_eksetasis' => 'nullable|date',
            'Date_dikasimou' => 'nullable|date',
            'Date_paradosis' => 'nullable|date',
            'Fpa' => 'nullable | numeric',
            'Ekpt_parts' => 'nullable |numeric',
            'Ekpt_jobs' => 'nullable|numeric',
            'value_car_pathon' => 'nullable|numeric',
            'Valid' => 'in:true,false',
            'Simpliromatiki' => 'in:true,false',
            'Sap' => 'in:true,false',
            'partially_lock' => 'in:Ναι,Όχι',
            'total_lock' => 'in:Ναι,Όχι',
            'id_ypaitiou'=>'nullable',
        ];
    }
}
