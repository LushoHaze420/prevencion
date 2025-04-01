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
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->id();
            /*tabla manmtenimiento no debe tener parametros de capacitados*/
            /*$table->string('nombre_prev', 30);
            $table->string('rut_cap', 9);
            $table->string('nombre_cap', 30);
            $table->string('apellidos_cap', 40);
            $table->string('cargo_cap', 30);*/
            $table->string('odi', 100)->nullable();
            $table->string('extintores', 100)->nullable();
            $table->string('difusion', 100)->nullable();
            $table->string('manejo_manual_carga_ma', 100)->nullable();
            $table->string('transtornos_musculo_esqueleticos', 100)->nullable();
            $table->string('primeros_auxilios', 100)->nullable();
            $table->string('manejo_sustancias_peligrosas', 100)->nullable();
            $table->string('almacenamiento_sustancias_peligrosas', 100)->nullable();
            $table->string('prevencion_exposicion_radiacion_uv', 100)->nullable();
            $table->string('uso_correcto_epp', 100)->nullable();
            $table->string('plan_emergencia', 100)->nullable();
            $table->string('control_riesgos_altura', 100)->nullable();
            $table->string('cuidado_manos', 100)->nullable();
            $table->string('orientacion_prevencion_riesgos');
            $table->string('prexor', 100)->nullable();
            $table->string('actitudes_preventivas', 100)->nullable();
            $table->string('uso_herramientas_electricas_y_motrices', 100)->nullable();
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
        Schema::dropIfExists('mantenimiento');
    }
};
