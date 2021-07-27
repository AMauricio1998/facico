<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactPost extends FormRequest
{

    public function messages(){
        return[
            'name.required' => 'El nombre es requerido',
            'surname.required' => 'El apellido es requerido',
            'email.required' => 'El email es requerido',
            'message.required' => 'Coloca un mensaje o nota',
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
            'name' => 'required|min:3|max:30',
            'surname' => 'required|min:5',
            'email' => 'required|string|email|max:255',
            'message' => 'required|min:7 max:10',
        ];
    }
}
