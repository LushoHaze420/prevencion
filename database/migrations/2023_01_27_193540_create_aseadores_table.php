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
        Schema::create('aseadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_prev', 30);
            $table->string('rut_cap', 9);
            $table->string('nombre_cap', 30);
            $table->string('apellidos_cap', 40);
            $table->string('rol_cap', 30);
            $table->string('odi', 100)->nullable();//nullable para cuando no se cargue algun documento
            $table->string('extintores', 100)->nullable();
            $table->string('difusion', 100)->nullable();
            $table->string('limpieza_desinfeccion_covid', 100)->nullable();
            $table->string('uso_sustancias_peligrosas', 100)->nullable();
            $table->string('uso_correcto_epp', 100)->nullable();
            $table->string('diploma', 100)->nullable();
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
        Schema::dropIfExists('aseadores');
    }
};
