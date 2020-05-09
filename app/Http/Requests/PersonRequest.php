<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'L_name'=>'required',
            'F_name'=>'required',
            'Phone'=>'nullable|numeric|max:10',
            'mark_del'=>'in:Ναι,Όχι',
            'AFM'=>'nullable|numeric|max:9',
            'Kinito'=>'nullable|numeric|max:10'
        ];
    }
}
