<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y tiene el rol de usuario normal (rol 2)
        if (Auth::check() && Auth::user()->role == 2) {
            return $next($request); // Permite el acceso
        }

        // Redirige al usuario si no tiene el rol correcto
        return redirect('/')->with('error', 'Acceso denegado.');
    }
}