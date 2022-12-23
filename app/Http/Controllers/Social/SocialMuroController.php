<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\Models\MuroMensaje;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialMuroController extends Controller
{
    public function index(){
        $message_list = null;
        if (Auth::check()) {
            $searched_user = Auth::user()->tipoUsuario;
            $message_list = MuroMensaje::join('usuarios', 'usuarios.id', '=', 'muro_mensajes.usuario_id')
                -> where('usuarios.tipoUsuario', 'like', $searched_user)->select('*', 'muro_mensajes.id as message_id')->get();
        }
        return view('/webViews/social/muro') -> with('message_list',$message_list);
    }

    public function store(Request $request) {
        if(Auth::check()){
            $muroMensaje = new MuroMensaje();
            $muroMensaje -> date = Carbon::now() -> format('Y-m-d');
            $muroMensaje -> usuario_id = Auth::user()->id;
            $muroMensaje -> titulo = $request -> titulo;
            $muroMensaje -> content = $request -> contenido;
            $muroMensaje->save();
        }
        return redirect('socialMuro');
    }
}
