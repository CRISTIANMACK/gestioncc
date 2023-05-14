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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('idEstudiante');
            $table->string('carnet',10);
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('email',70);
            $table->unsignedBigInteger('idCarrera');
            $table->unsignedBigInteger('idGenero');
            $table->foreign('idCarrera')->references('idCarrera')->on('carreras');
            $table->foreign('idGenero')->references('idGenero')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
