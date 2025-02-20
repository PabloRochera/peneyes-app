<?php

namespace Database\Seeders;

use App\Models\Crew;
use Illuminate\Database\Seeder;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 5 registros para la tabla crews
        Crew::create([
            'name' => 'Penya Blaugrana',
            'color' => 'Azul',
            'slogan' => 'Sempre Blaugrana',
            'capacity' => 50,
            'foundation' => '2000-01-01',
        ]);

        Crew::create([
            'name' => 'Penya Groga',
            'color' => 'Amarillo',
            'slogan' => 'Sempre Groga',
            'capacity' => 40,
            'foundation' => '2005-05-05',
        ]);

        Crew::create([
            'name' => 'Penya Roja',
            'color' => 'Rojo',
            'slogan' => 'Sempre Roja',
            'capacity' => 60,
            'foundation' => '2010-10-10',
        ]);

        Crew::create([
            'name' => 'Penya Verda',
            'color' => 'Verde',
            'slogan' => 'Sempre Verda',
            'capacity' => 30,
            'foundation' => '2015-03-15',
        ]);

        Crew::create([
            'name' => 'Penya Morada',
            'color' => 'Morado',
            'slogan' => 'Sempre Morada',
            'capacity' => 45,
            'foundation' => '2020-07-20',
        ]);
    }
}
