<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'num_cuenta',
        'email',
        'licenciatura_id',
        'insumo',
        'fecha_pres',
        'hora_pres',
        'fecha_dev',
        'hora_dev',
        'activo',
    ];

     
    public function licenciatura(){
        return $this->belongsTo(licenciatura::class);
    }

    public function imagen(){
        return $this->hasOne(PrestamoImage::class);
    }

}
