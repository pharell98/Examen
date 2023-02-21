<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferentielRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'libelle_ref' => 'required|min:3|unique:referentiels,libelle',
                'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'libelle_ref.required' => 'Le champ Libelle Ref. est obligatoire',
            'libelle_ref.unique' => 'Le champ Libelle Ref. existe déja',
            'libelle_ref.min' => 'Le champ referentiel contenir ou moins 3 caracteres',
            'type.required' => 'Le choisir le type du réferentiel'
        ];
    }
}
