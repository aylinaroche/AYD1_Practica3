<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/Inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            'usuario' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            //return 'Has iniciado sesion correctamente';
            return redirect()->route('Inicio');
        }
        return back()->withErrors(['usuario' =>  'No existe el usuario indicado']);
    }

    public function showLoginForm()
    {
        return view('auth.Login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
