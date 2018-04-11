<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function debitar()
    {
        # code...
    }
}
