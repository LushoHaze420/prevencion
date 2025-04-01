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
        Schema::create('geryjef', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_prev', 30);
            $table->string('rut_cap', 9);
            $table->string('nombre_cap', 30);
            $table->string('apellidos_cap', 40);
            $table->string('rol_cap', 30);
            $table->string('odi', 100)->nullable();
            $table->string('extintores', 100)->nullable();
            $table->string('difusion', 100)->nullable();
            $table->string('taller_responsabilidad_civil_penal', 100)->nullable();
            $table->string('investigacion_accidentes', 100)->nullable();
            $table->string('liderazgo_comunicacion_administracion_negocios', 100)->nullable();
            $table->string('identificacion_peligros_y_evaluacion_riesgos', 100)->nullable();
            $table->string('prevencion_coronavirus', 100)->nullable();
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
        Schema::dropIfExists('geryjef');
    }
};
