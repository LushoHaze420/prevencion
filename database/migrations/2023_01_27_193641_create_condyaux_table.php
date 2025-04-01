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
        Schema::create('condyaux', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_prev', 30);
            $table->string('rut_cap', 9);
            $table->string('nombre_cap', 30);
            $table->string('apellidos_cap', 40);
            $table->string('rol_cap', 30);
            $table->string('odi', 100)->nullable();
            $table->string('extintores', 100)->nullable();
            $table->string('difusion', 100)->nullable();
            $table->string('manejo_defensiva', 100)->nullable();
            $table->string('riesgos_criticos_conduccion_buses', 100)->nullable();
            $table->string('reinduccion_exceso_velocidad', 100)->nullable();
            $table->string('campaña_exceso_velocidad', 100)->nullable();
            $table->string('conduccion_segura_alta_montaña', 100)->nullable();
            $table->string('control_riesgos_conduccion', 100)->nullable();
            $table->string('manejo_defensiva_autopistas_carreteras', 100)->nullable();
            $table->string('control_riesgos_fatiga_somnolencia_conduccion', 100)->nullable();
            $table->string('reinduccion_manejo_defensiva', 100)->nullable();
            $table->string('manejo_manual_cargas', 100)->nullable();
            $table->string('curso_teorico_practico_conduccion_simulador', 100)->nullable();
            $table->string('promocion_salud', 100)->nullable();
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
        Schema::dropIfExists('condyaux');
    }
};
