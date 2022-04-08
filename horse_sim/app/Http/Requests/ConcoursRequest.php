<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConcoursRequest extends FormRequest
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
            'ID_Item' => 'required|min:0|max:2',
            'ID_infra' => 'required|min:0|max:2',
            'date_deb' => '',
            'date_fin' => 'required'
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
            'ID_Item.required' => 'Non valide',
            'ID_infra.required' => 'Non valide',
            'date_fin.required' => 'Non valide'
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
            //
        ];
    }
}
