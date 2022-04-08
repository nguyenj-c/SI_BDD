<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClubHippiqueRequest extends FormRequest
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
            'ID_infra' => 'required|min:0|max:2',
            'ID_concours' => 'required|min:0|max:2',
            'capacite' => 'required|min:0|max:2'
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
            'ID_infra.required' => 'Non valide',
            'ID_concours.required' => 'Non valide',
            'capacite.required' => 'Non valide'
        ];
    }
}
