<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Método para procesar el formulario de contacto
    public function send(Request $request)
    {
        $request->validate([
            'nom'       => 'required|string|max:255',
            'email'     => 'required|email',
            'missatge'  => 'required|string',
        ]);
        
        // Procesar el formulario (ejemplo: enviar email)
        // Mail::to('destino@example.com')->send(new ContactMail($request->all()));
        
        return redirect()->back()->with('success', 'El teu missatge s\'ha enviat correctament.');
    }
    
    // ...otros métodos si los hubiera...
}