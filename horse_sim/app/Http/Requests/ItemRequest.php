<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'ID_niveau' => 'required|min:0|max:2',
            'ID_famille' => 'required|min:0|max:2',
            'type' => 'required|min:5|max:20',
            'description' => 'required|min:0|max:50',
            'prix' => 'required|min:0|max:3'
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
            'ID_niveau.required' => 'Non valide',
            'ID_famille.required' => 'Non valide',
            'type.required' => 'Non valide',
            'description.required' => 'Non valide',
            'prix.required' => 'Non valide'
        ];
    }
}
