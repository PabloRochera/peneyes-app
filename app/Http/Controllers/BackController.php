<?php

namespace App\Http\Controllers;

use App\Mail\AdminToUserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackController extends Controller
{
    // En BackController.php
    public function index()
    {
        return view('back.homeback'); // Vista para el back office
    }

    //funcion para enviar correos desde el backoffice al usuario
    public function sendBackContactMessage(Request $request, $userId)
    {
        // Validación de los campos
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Obtener el usuario al que se enviará el mensaje
        $user = User::findOrFail($userId);

        // Preparar los detalles del mensaje
        $details = [
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Enviar el mensaje al correo del usuario
        Mail::to($user->email)->send(new AdminToUserMail($details, 'emails.adminToUser'));

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado al usuario correctamente');
    }
}