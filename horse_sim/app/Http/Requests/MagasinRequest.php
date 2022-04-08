<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MagasinRequest extends FormRequest
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
            'ID_centre' => 'required|min:0|max:2',
            'ID_club' => 'required|min:0|max:2',
            'ID_infra' => 'required|min:0|max:2',
            'ID_items' => 'required|min:5|max:30',
            'nom' => 'required|min:5|max:30'
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
            'ID_centre.required' => 'ID non recevable',
            'ID_club.required' => 'ID non recevable',
            'ID_infra.required' => 'ID non recevable',
            'ID_items.required' => 'ID non recevable',
            'nom.required' => 'Nom non valide'
        ];
    }
}
