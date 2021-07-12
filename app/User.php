<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'num_cuenta',
        'nombre',
        'app',
        'apm',
        'foto_perf',
        'email',
        'pass',
        'tip_usu',
        'activo',
    ];
}
