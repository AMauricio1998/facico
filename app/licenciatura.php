<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class licenciatura extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function prestamo(){
        return $this->hasMany(prestamo::class);
    }
}
