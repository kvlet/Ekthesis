<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends FormRequest
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
            'eksodo'=>'required',
            'type_eksodo'=>'in:Αμοιβή,Έξοδο | required',
            'Where_use'=>'in:Ε,Γ,Ε/Γ | required',
            'Mark_del'=>'in:Ναι,Όχι',
            'flag'=>'required',
        ];
    }
}
