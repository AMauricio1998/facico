<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPost extends FormRequest
{

    public function messages(){
        return[
            'name.required' => 'El nombre es requerido',
            'surname.required' => 'El apellido es requerido',
            'email.required' => 'El email es requerido',
            'email.unique' => 'El email ya se encuentra en uso',
            'password.required' => 'La contraseña es requerida',
        ];
    }

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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:100',
        ];
    }
}
