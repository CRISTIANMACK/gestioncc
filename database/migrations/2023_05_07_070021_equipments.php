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
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('idEquipo');
            $table->unsignedBigInteger('idEstadoEquipo');
            $table->unsignedBigInteger('idLab');
            $table->string('observaciones',100)->nullable();
            $table->integer('numero');
            $table->foreign('idEstadoEquipo')->references('idEstadoEquipo')->on('estadoEquipos');
            $table->foreign('idLab')->references('idLab')->on('labs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
};
