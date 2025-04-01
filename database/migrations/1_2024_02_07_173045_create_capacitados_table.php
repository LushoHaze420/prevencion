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
        Schema::create('capacitados', function (Blueprint $table) {
            $table->id();
            $table->string('rut_cap', 9);
            $table->string('nombres_cap', 30);
            $table->string('apellidos_cap', 40);
            $table->string('cargo_cap', 30);
            $table->unsignedBigInteger('departamento_id'); // Corregido a unsignedBigInteger
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('cap_administrativos_id')->references('id')->on('cap_administrativos');
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
        Schema::dropIfExists('capacitados');
    }
};

?>
