<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoueurCompteRequest extends FormRequest
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
            'ID_joueur' => 'required|min:0|max:2',
            'ID_centre' => 'required|min:0|max:2',
            'ID_chevaux' => 'required|min:0|max:2',
            'ID_club' => 'required|min:0|max:2',
            'ID_items' => 'required|min:0|max:2',
            'ID_taches' => 'required|min:0|max:2',
            'username' => 'required|min:5|max:30',
            'mdp' => 'required|min:5|max:50'
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
            'ID_joueur.required' => 'Non valide',
            'ID_centre.required' => 'Non valide',
            'ID_chevaux.required' => 'Non valide',
            'ID_club.required' => 'Non valide',
            'ID_items.required' => 'Non valide',
            'ID_taches.required' => 'Non valide',
            'username.required' => 'Non valide',
            'mdp.required' => 'Non valide'
        ];
    }
}
