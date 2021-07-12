<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrestamoPost extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:30',
            'apellidos' => 'required|min:10',
            'telefono' => 'required',
            'num_cuenta' => 'required|min:7 max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'insumo' => 'required',
            'fecha_pres' => 'required|date',
            'hora_pres' => 'required',
            'fecha_dev' => 'required|date',
            'hora_dev' => 'required',
            'activo' => 'required',
            'licenciatura_id' => 'required',
        ];
    }
}
