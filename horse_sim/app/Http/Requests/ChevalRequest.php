<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChevalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ID_attribut' => 'required|min:0|max:2',
            'ID_etat' => 'required|min:0|max:2',
            'ID_items' => 'required|min:0|max:2',
            'nom' => 'required|min:5|max:30',
            'race' => 'required|min:5|max:20',
            'description' => 'required|min:10|max:50'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'ID_attribut.required' => 'Non valide',
            'ID_etat.required' => 'Non valide',
            'ID_items.required' => 'Non valide',
            'nom.required' => 'Non valide',
            'race.required' => 'Non valide',
            'description.required' => 'Non valide'
        ];
    }
}
