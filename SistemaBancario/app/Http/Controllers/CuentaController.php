<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cuenta;

class CuentaController extends Controller
{
    
    public function store(Request $request )
    {
        $select = DB::select('select * from users order by id desc limit 1');
        $id = $select[0]->id;
        //DB::insert('insert into cuenta (saldo, idCuenta) values (?, ?)', [0,$id]);
        $cuenta = new Cuenta;
        $cuenta->saldo = 0;
        $cuenta->idUsuario = $select[0]->id ;
        $cuenta->save();
        return redirect('/Inicio');
    }
}
