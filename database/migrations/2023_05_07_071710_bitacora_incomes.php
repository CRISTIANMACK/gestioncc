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
        Schema::create('bitacoraIngresos', function (Blueprint $table) {
            $table->bigIncrements('idIngreso');
            $table->unsignedBigInteger('idMotivo');
            $table->unsignedBigInteger('idEstudiante');
            $table->unsignedBigInteger('idEquipo');
            $table->string('horaentrada',20);
            $table->string('horaSalida',20);
            $table->string('fecha',30);
            $table->string('observation',100)->nullable();
            $table->foreign('idMotivo')->references('idMotivo')->on('motivos');
            $table->foreign('idEstudiante')->references('idEstudiante')->on('estudiantes');
            $table->foreign('idEquipo')->references('idEquipo')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacoraIngresos');
    }
};
