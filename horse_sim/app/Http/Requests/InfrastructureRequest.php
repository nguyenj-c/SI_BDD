<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfrastructureRequest extends FormRequest
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
            'ID_accomodation_capacity' => 'required|min:0|max:2',
            'ID_items' => 'required|min:0|max:2',
            'type' => 'required|min:0|max:10',
            'niveau' => 'required|min:0|max:1',
            'description' => 'required|min:0|max:50',
            'infrastructure_family' => 'required|min:0|max:10',
            'prix' => 'required|min:0|max:3',
            'ressource_consumption' => 'required|min:0|max:3'
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
            'ID_accomodation_capacity.required' => 'Non valide',
            'ID_items.required' => 'Non valide',
            'type.required' => 'Non valide',
            'niveau.required' => 'Non valide',
            'description.required' => 'Non valide',
            'infrastructure_family.required' => 'Non valide',
            'prix.required' => 'Non valide',
            'ressource_consumption.required' => 'Non valide'
        ];
    }
}
