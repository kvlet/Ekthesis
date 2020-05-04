<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PraktoreioRequest extends FormRequest
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
            'eponymia'=>'required',
            'tel'=>'required|numeric|max:10',
            'mark_del'=>'in:Ναι,Όχι',
            'fax'=>'nullable|numeric|max:10',
            'kinito'=>'nullable|numeric|max:10'
        ];
    }
}
