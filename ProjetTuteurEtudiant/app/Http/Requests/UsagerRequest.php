<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
        [
            'matricule' => 'required',
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'email' => 'required|min:5',
            'password' => 'required|min:3',
            'nb_heures' => 'required',
        ];
    }

    public function messages()
    {
        return 
        [
            'matricule.required' => 'Erreur matricule',
            'nom.required' => 'Erreur nom ',
            'prenom.required' => 'Erreur prenom',
            'email.required' => 'Erreur email',
            'password.required' => 'Erreur password',
            'nom.min' => 'Erreur nom minimum 3 caractère',
            'prenom.min' => 'Erreur prenom minimum 3 caractère',
            'email.min' => 'Erreur email minimum 5 caractère',
            'password.min' => 'Erreur password minimum 3 caractère',
        ];
    }
}
