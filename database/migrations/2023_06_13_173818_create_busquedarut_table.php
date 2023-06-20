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
        Schema::create('busquedarut', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rut_cap', 9);
            $table->string('nombre_cap', 30);
            $table->string('apellidos_cap', 30);
            $table->string('rol_cap', 20);
            $table->string('documentos', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('busquedarut');
    }
};
