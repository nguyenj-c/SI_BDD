<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChevalAttributRequest extends FormRequest
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
            'resistance' => 'required|min:0|max:1',
            'endurance' => 'required|min:0|max:1',
            'detente' => 'required|min:0|max:1',
            'vitesse' => 'required|min:0|max:1',
            'sociabilite' => 'required|min:0|max:1',
            'intelligence' => 'required|min:0|max:1',
            'temperament' => 'required|min:0|max:1'
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
            'resistance.required' => 'Non valide',
            'endurance.required' => 'Non valide',
            'detente.required' => 'Non valide',
            'vitesse.required' => 'Non valide',
            'sociabilite.required' => 'Non valide',
            'intelligence.required' => 'Non valide',
            'temperament.required' => 'Non valide'
        ];
    }
}
