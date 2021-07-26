<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrestamoPost extends FormRequest
{
    public function messages(){
        return[
            'nombre.required' => 'El nombre es requerido para crear el prestamo',
            'apellidos.required' => 'El apellido es requerido para crear el prestamo',
            'telefono.required' => 'El telefono es requerido para crear el prestamo',
            'email.required' => 'El email es requerido para crear el prestamo',
            'num_cuenta.required' => 'El numero de cuenta requerido para crear el prestamo',
            'insumo.required' => 'El nombre del insumo es requerido',
            'fecha_pres.required' => 'La fecha de prestamo es requerida',
            'hora_pres.required' => 'La hora de prestamo es requerida',
            'fecha_dev.required' => 'La fecha de devolucion es requerida',
            'hora_dev.required' => 'La hora de devolucion es requerida',
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
            'nombre' => 'required|min:3|max:30',
            'apellidos' => 'required|min:5',
            'telefono' => 'required',
            'num_cuenta' => 'required|min:7 max:10',
            'email' => 'required|string|email|max:255',
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
