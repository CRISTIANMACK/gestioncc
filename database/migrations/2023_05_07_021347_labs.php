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
        Schema::create('labs', function (Blueprint $table) {
            $table->bigIncrements('idLab');
            $table->string('lab',30);
            $table->unsignedBigInteger('idEstadoLab');
            $table->unsignedBigInteger('idUsuario');
            $table->string('horaAbierto',30);
            $table->string('horaCerrado',30);
            $table->integer('cantidadEquipos');
            $table->foreign('idEstadoLab')->references('idEstadoLab')->on('estadoLabs');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labs');
    }
};
