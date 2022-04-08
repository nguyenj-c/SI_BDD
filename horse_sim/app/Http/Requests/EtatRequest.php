<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtatRequest extends FormRequest
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
            'ID_proprete' => 'required|min:0|max:2',
            'sante' => 'required|min:0|max:2',
            'moral' => 'required|min:0|max:2',
            'stress' => 'required|min:0|max:2',
            'fatigue' => 'required|min:0|max:2',
            'faim' => 'required|min:0|max:2'
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
            'ID_proprete.required' => 'Non valide',
            'sante.required' => 'Non valide',
            'moral.required' => 'Non valide',
            'stress.required' => 'Non valide',
            'fatigue.required' => 'Non valide',
            'faim.required' => 'Non valide'
        ];
    }
}
