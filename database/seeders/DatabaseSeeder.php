<?php

namespace Database\Seeders;

use App\Models\Crew;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //quiero ejecurtar el seede de users y de roles
         $this->call([
              RolesSeeder::class,
            
              UserSeeder::class,
            ]);

        
    }
}
