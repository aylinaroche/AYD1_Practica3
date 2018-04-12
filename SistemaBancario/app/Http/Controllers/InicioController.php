<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class InicioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); //Para que deje pasar solo usuarios autenticados
    }

    public function inicio()
    {
        $id = auth()->user()->id;
        $select = DB::select('select saldo from cuenta where idUsuario =?',[$id]);
        return view('Inicio')->with('saldo', $select[0]->saldo);
    }
}
