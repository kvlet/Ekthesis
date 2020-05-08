<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SynerrgeioRequest extends FormRequest
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
            'Name_syner'=>'required',
            'Phone'=>'required|numeric|max:10',
            'Kinito'=>'nullable|numeric|max:10',
            'Fax'=>'nullable|numeric|max:10',
            'id_typos_synergeiou'=>'in:1,2',
            'Mark_del'=>'in:Ναι,Όχι'
        ];
    }
}
