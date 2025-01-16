<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Cambiar el tipo de columna existente
            $table->integer('role')->default(2)->change();
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Revertir al tipo anterior (ajústalo si era 'string')
            $table->string('role')->default('Plain User')->change();
        });
    }
};
