<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        Role::create(['id' => Role::ADMIN, 'name' => 'Admin']);
        Role::create(['id' => Role::USER, 'name' => 'User']);
    }
}
