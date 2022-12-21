<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ComprobarTipoUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param mixed ...$roles
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $userRole = Auth::user()!=null ? Auth::user()->tipoUsuario : '';
        forEach($roles as &$role) {
            $role = ucfirst($role);
            if ($userRole == $role) {
                return $next($request);
            }
        }
        return Redirect::route('home');
    }
}
