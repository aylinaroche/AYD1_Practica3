<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    //
    protected $table = "cuenta";
    public $timestamps = true;

    protected $fillable = [
        'saldo','idUsuario'
    ];
}
