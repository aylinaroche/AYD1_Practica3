<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function acreditar()
    {
        # code...
    }
}
