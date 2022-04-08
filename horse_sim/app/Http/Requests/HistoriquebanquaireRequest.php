<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriquebanquaireRequest extends FormRequest
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
            'ID_banque_compte' => 'required|min:0|max:2',
            'operation_effetuee' => 'required|min:0|max:10',
            'montant' => 'required|min:0|max:5',
            'last_connexion' => 'required'
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
            'ID_banque_compte.required' => 'Non valide',
            'operation_effetuee.required' => 'Non valide',
            'montant.required' => 'Non valide',
            'last_connexion.required' => 'Non valide'
        ];
    }
}
