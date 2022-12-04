<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    public function index()
    {
        return view('themes/temaGrupo3/register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:usuarios,nombre'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'confirmed', Password::defaults()]
        ]);
        $usuario = new Usuario();
        $usuario->nombre = $request->username;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->telefono = null;
        $usuario->tipoUsuario = $request->userType;
        $usuario->direccion = null;
        $usuario->save();

        return redirect('login')->with('status','You have been successfully registered');
    }
}
