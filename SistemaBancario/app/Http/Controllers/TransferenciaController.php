<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Transferencia;

class TransferenciaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth'); //Para que deje pasar solo usuarios autenticados
    }

    public function transferencia()
    {
        return view('Transferencia');
    }

    public function transferir(Request $request)
    {
        try {
            $id = auth()->user()->id;
            $select1 = DB::select('select saldo from cuenta where idUsuario =?',[$id]);
            $cantidad1 = $select1[0]->saldo - $request->monto;
            DB::update('update cuenta set saldo = ? where id = ?', [$cantidad1, $id]);

            $select = DB::select('select saldo from cuenta where id =?',[$request->cuenta]);
            $cantidad = $request->monto + $select[0]->saldo;
            DB::update('update cuenta set saldo = ? where id = ?', [$cantidad,$request->cuenta]);

            $trans = new Transferencia;
            $trans->monto =  $request->monto;
            $trans->idCuenta1 = $id;
            $trans->idCuenta2 = $request->cuenta;
            $trans->save();
            return redirect("/Inicio");
        } catch (Exception $e) {
            return redirect("/Credito");
        }
    }
}
