<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeRequest extends FormRequest
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
            'libelleType' => 'required|min:3|unique:types,type',
        ];
    }
    public function messages()
    {
        return [
            'libelleType.required' => 'Le champ type obligatoire',
            'libelleType.unique' => 'Le champ Libelle Type existe déja',
            'libelleType.min' => 'Le champ type contenir ou moins 3 caracteres',
        ];
    }
}
