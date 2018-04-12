<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $table = "transaccion";
    public $timestamps = true;

    protected $fillable = [
        'monto','descripcion','tipo','idCuenta'
    ];
}
