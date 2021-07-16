<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestamoImage extends Model
{
    protected $fillable = [
        'prestamo_id',
        'image'
    ];

    public function prestamo(){
        return $this->belongsTo(Prestamo::class);
    }

}
