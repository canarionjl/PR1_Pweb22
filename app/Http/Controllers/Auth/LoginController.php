<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use \Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('themes/temaGrupo3/login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('/')->with('status','Iniciaste sesión con éxito');
        }
        throw ValidationException::withMessages([   
            'password' => 'Contraseña incorrecta'
        ]);
    }
}
