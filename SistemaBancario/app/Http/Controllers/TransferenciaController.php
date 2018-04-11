<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function transferir()
    {
        # code...
    }
}
