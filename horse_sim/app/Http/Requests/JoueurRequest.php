<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoueurRequest extends FormRequest
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
            'nom' => 'required|min:5|max:30',
            'prenom' => 'required|min:5|max:30',
            'email' => 'required|min:5|max:30',
            'sexe' => 'required',
            'birthDate' => 'required',
            'phone' => 'required|min:5|max:30',
            'address' => 'required|min:5|max:255',
            'IP_address' => 'required|min:15|max:15',
            'profile_picture' => 'required|min:15|max:100'
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
            'nom.required' => 'Non valide',
            'prenom.required' => 'Non valide',
            'email.required' => 'Non valide',
            'sexe.required' => 'Non valide',
            'birthDate.required' => 'Non valide',
            'phone.required' => 'Non valide',
            'address.required' => 'Non valide',
            'IP_address.required' => 'Non valide',
            'profile_picture.required' => 'Non valide'
        ];
    }
}
