<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OximataRequest extends FormRequest
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
            'Ar_kyklo' => 'required',
            'Ar_plasiou' => 'required',
            'id_markes'  => 'required',
            'modelo'  => 'required',
            'id_xrisi'   => 'required',
            'Hm_first_kykl' => 'nullable|date',
            'id_xromata'   => 'required',
            'Thesis' => 'nullable | numeric|max:3',
            'Ippoi' => 'nullable |numeric|max:2',
            'id_car_type'   => 'required',
            'kibika' => 'nullable|numeric|max:4',
            'id_paint'   => 'required',
            'manuf_year' => 'nullable|numeric|max:4',
        ];
    }
}
