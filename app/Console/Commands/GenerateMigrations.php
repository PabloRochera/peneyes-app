<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateMigrations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:migrations-from-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera migraciones basadas en una lista de nombres predefinidos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $migrations = [
           'add_confirmed_to_user_crews_table',
            'create_roles_table',
            'modify_role_column_in_users_table',
            'add_role_to_users_table',
            'add_remember_token_to_users_table',
            'add_email_verified_at_to_users_table',
            'create_cache_table',
            'create_failed_jobs_table',
            'create_personal_access_tokens_table',
            'create_password_resets_table',
            'create_sessions_table',
            'create_payments_table',
            'create_draws_table',
            'create_user_crews_table',
            'create_locations_table',
            'create_platforms_table',
            'create_crews_table',
            'create_users_table',
        ];

        foreach ($migrations as $migration) {
            $this->call('make:migration', ['name' => $migration]);
            $this->info("Migración creada: $migration");
        }

        $this->info('¡Todas las migraciones han sido creadas!');
    }
}