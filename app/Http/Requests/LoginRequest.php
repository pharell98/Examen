<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'fullname' => 'required|min:5',
            'age' => 'required|numeric|min:15|max:35|',
            'niveauEt' => 'required',
            'email' => 'required|unique:Users,email',
            'password' => 'required|min:5',
            'sexe' => 'required',
        ]; 
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Le champ nom complet est requis',
            'fullname.min' => 'Le champ nom complet doit contenir au moins 5 caractéres',
            'age.required' => 'Le champ Age est requis',
            'age.numeric' => 'Le champ Age est de type numeric',
            'age.min' => 'minimun age 15',
            'age.max' => 'maximun age 35',
            'niveauEt' => 'Le champ niveau étude est requis',
            'email.required' => 'Le champ E-mail est requis',
            'email.unique' => 'Ce mail exite déja',
            'password.required' => 'Le champ password est requis',
            'password.min' => 'Le champ password doit contenir au moins 5 caractéres',
            'sexe.required' => 'Genre est requis',
            
        ];
    }
}
