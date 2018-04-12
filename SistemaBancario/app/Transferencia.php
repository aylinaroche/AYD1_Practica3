<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    protected $table = "transferencia";
    public $timestamps = true;

    protected $fillable = [
        'monto','idCuenta1','idCuenta2'
    ];
}
