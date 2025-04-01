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
        Schema::create('cap_administrativos', function (Blueprint $table) {
            $table->id();
            $table->string('odi_ad', 255)->nullable();
            $table->string('extintores_ad', 255)->nullable();
            $table->string('difusion_ad', 255)->nullable();
            $table->string('primeros_auxilios_ad', 255)->nullable();
            $table->string('tmert_ad', 255)->nullable();
            $table->string('diploma_ad', 255)->nullable();

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
        Schema::dropIfExists('cap_administrativos');
    }
};
