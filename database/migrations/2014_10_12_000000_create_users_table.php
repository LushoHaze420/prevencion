<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {  //esta migracion es para los usuarios del sistema, no debe utilizarse para el filtro de busqueda por rut, para eso buscar en las tablas de los departamentos.
            $table->id();
            $table->string('rut', 9)->unique();
            $table->string('name', 30);
            $table->string('last_name', 30);
            $table->string('email', 40)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('role', 20);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
