<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimologioCompanyRequest extends FormRequest
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
            'Ar_timologiou' => 'required',
            'Date_ekdosis' => 'required|date',
            'Geniko_synolo' => 'required',
            'id_company' => 'required',
            'id_grafeio' => 'required',
            'Valid' => 'required',
            'Parakratisi' => 'required',
            'Merikos_pliroteo' => 'required',
            'Eksoda_timologion' => 'required',
        ];
    }
}
