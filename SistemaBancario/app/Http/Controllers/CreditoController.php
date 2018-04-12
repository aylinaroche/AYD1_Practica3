<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Transaccion;

class CreditoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth'); //Para que deje pasar solo usuarios autenticados
    }

    public function credito()
    {
        return view('Credito');
    }

    public function acreditar(Request $request)
    {
        try {
            $select = DB::select('select saldo from cuenta where id =?',[$request->cuenta]);
            $cantidad = $request->monto + $select[0]->saldo;
            DB::update('update cuenta set saldo = ? where id = ?', [$cantidad,$request->cuenta]);

            $trans = new Transaccion;
            $trans->monto =  $request->monto;
            $trans->descripcion = $request->descripcion;
            $trans->tipo = 'credito';
            $trans->idCuenta = $request->cuenta;
            $trans->save();
            return redirect("/Inicio");
        } catch (Exception $e) {
            return redirect("/Credito");
        }
        
    }
}
