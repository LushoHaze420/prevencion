<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_dep', 50);
            $table->timestamps();
        });

        // Inserta datos **después** de crear la tabla
        DB::table('departamentos')->insert([
            ['nombre_dep' => 'Administrativos'],
            ['nombre_dep' => 'Aseadores'],
            ['nombre_dep' => 'Cajeras'],
            ['nombre_dep' => 'CondyAux'],
            ['nombre_dep' => 'GeryJef'],
            ['nombre_dep' => 'Mantenimiento'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
};
