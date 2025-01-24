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
            'name' => 'Admin',
            'surname' => 'User',
            'email' => 'admin@admin.com', 
            'birthday' => '1980-01-01', 
            'password' => Hash::make('12345678'), 
            'role_id' => 1, 
        ]);

        // Crear el usuario regular
        User::create([
            'name' => 'User', 
            'surname' => 'User', 
            'email' => 'user@user.com', 
            'birthday' => '1990-01-01', 
            'password' => Hash::make('12345678'), 
            'role_id' => 2, 
        ]);
    }
}
