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
        Schema::create('bitacoraAcciones', function (Blueprint $table) {
            $table->bigIncrements('idAccion');
            $table->unsignedBigInteger('idUsuario');
            $table->string('accion',100);
            $table->string('fechaAccion',20);
            $table->string('hora',20);
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
        Schema::dropIfExists('bitacoraAcciones');
    }
};
