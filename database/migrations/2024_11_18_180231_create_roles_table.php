<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // ID del role
            $table->string('name'); // Nombre del role (e.g., Admin, User)
            $table->timestamps();
        });

        // Modificar la tabla users para usar una foreign key
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')
                ->nullable()
                ->default(2) // Establecer valor por defecto
                ->after('password'); // Relación con roles
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('set null');
            $table->dropColumn('role'); // Eliminar la columna 'role' original
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
            $table->integer('role')->nullable(); // Restaurar la columna original
        });

        Schema::dropIfExists('roles');
    }
}
