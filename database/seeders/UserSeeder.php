<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el usuario administrador
        User::create([
            'name' => 'Admin', // Nombre del administrador
            'surname' => 'User', // Apellido del administrador
            'email' => 'admin@admin.com', // Correo del administrador
            'birthday' => '1980-01-01', // Fecha de nacimiento (opcional)
            'password' => Hash::make('administrador'), // Contraseña segura
            'role_id' => 1, // Rol de administrador (asumiendo que 1 es admin)
        ]);

        // Crear el usuario regular
        User::create([
            'name' => 'User', // Nombre del usuario
            'surname' => 'User', // Apellido del usuario
            'email' => 'user@user.com', // Correo del usuario
            'birthday' => '1990-01-01', // Fecha de nacimiento (opcional)
            'password' => Hash::make('usuario'), // Contraseña segura
            'role_id' => 2, // Rol de usuario (asumiendo que 2 es usuario)
        ]);
    }
}
