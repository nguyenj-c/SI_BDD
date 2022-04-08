<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JournalRequest extends FormRequest
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
            'ID_article' => 'required|min:0|max:2',
            'agenda' => 'required|min:0|max:45',
            'top_events' => 'required|min:0|max:45'
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
            'ID_joueur.required' => 'Non valide',
            'ID_article.required' => 'Non valide',
            'agenda.required' => 'Non valide',
            'top_events.required' => 'Non valide'
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
