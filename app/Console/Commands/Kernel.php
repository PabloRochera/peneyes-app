<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define los comandos Artisan que el proyecto utilizará.
     */
    protected function commands()
    {
        $this->load(_DIR_.'/Commands');

        require base_path('routes/console.php');
    }

    /**
     * Define la programación de tareas del proyecto.
     */
    protected function schedule(Schedule $schedule)
    {
        // Puedes agregar tareas programadas aquí
    }
}