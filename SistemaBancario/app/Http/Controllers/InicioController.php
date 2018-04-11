<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); //Para que deje pasar solo usuarios autenticados
    }

    public function inicio()
    {
        return view('Inicio');
    }
}
