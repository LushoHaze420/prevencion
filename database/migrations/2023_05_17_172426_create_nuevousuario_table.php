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
        Schema::create('nuevousuario', function (Blueprint $table) {
            $table->id();
            $table->string('rut_NU', 9)->unique();;
            $table->string('nombre_NU', 30);
            $table->string('apellido_NU', 30);
            $table->string('email_NU', 40)->unique();;
            $table->string('contrasena_NU', 30);
            $table->string('rol_NU', 20);
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
        Schema::dropIfExists('nuevousuario');
    }
};
