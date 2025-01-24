<?php

// app/Http/Middleware/CheckRole.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->role_id == $role) {
            return $next($request);
        }
        
        // Redirigir si el usuario no tiene el rol adecuado
        return redirect('/'); // o a una ruta de acceso denegado
    }
}