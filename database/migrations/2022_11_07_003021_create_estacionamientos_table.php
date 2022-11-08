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
        Schema::create('estacionamientos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('hora_entrada');
            $table->dateTime('hora_salida');
            $table->float('importe');
            $table->integer('total_tiempo');
            $table->string('vehiculo_placa');
            $table->foreign('vehiculo_placa')->references('placa')->on('vehiculos');
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
        Schema::dropIfExists('estacionamientos');
    }
};
