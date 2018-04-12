<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Transaccion;

class DebitoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth'); //Para que deje pasar solo usuarios autenticados
    }

    public function debito()
    {
        return view('Debito');
    }

    public function debitar(Request $request)
    {
        try {
            $select = DB::select('select saldo from cuenta where id =?',[$request->cuenta]);
            $cantidad = $select[0]->saldo - $request->monto;
            DB::update('update cuenta set saldo = ? where id = ?', [$cantidad,$request->cuenta]);

            $trans = new Transaccion;
            $trans->monto =  $request->monto;
            $trans->descripcion = $request->descripcion;
            $trans->tipo = 'debito';
            $trans->idCuenta = $request->cuenta;
            $trans->save();
            return redirect("/Inicio");
        } catch (Exception $e) {
            return redirect("/Debito");
        }
    }
}
