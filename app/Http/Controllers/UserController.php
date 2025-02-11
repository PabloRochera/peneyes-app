<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Listar todos los usuarios
    public function index()
    {
        $users = User::all();
        return view('back.users.index', compact('users'));
    }

    // Mostrar formulario para crear un nuevo usuario
    public function create()
    {
        return view('back.users.create');
    }

    // Guardar un nuevo usuario
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birthday' => 'required|date',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'email' => $validated['email'],
            'birthday' => $validated['birthday'],
            'password' => Hash::make($validated['password']),
            'role_id' => 2, // Valor por defecto para usuarios estándar
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    // Mostrar formulario para editar un usuario existente
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('back.users.edit', compact('user'));
    }

    // Actualizar un usuario existente
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'surname' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
            'birthday' => 'sometimes|required|date',
            'password' => 'sometimes|nullable|string|min:8',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']); // No actualizar si no se envió una nueva contraseña
        }

        $user->update($validated);
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
}
