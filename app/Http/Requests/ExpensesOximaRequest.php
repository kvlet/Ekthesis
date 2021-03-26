<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpensesOximaRequest extends FormRequest
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
            'expen_date'=>'required|date',
            'id_expen_oxima'=>'required',
            'value'=>'required',
            'mark_del'=>'in:Ναι,Όχι',
        ];
    }
}
