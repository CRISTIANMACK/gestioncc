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
        Schema::create('estadoMaterias', function (Blueprint $table) {
            $table->bigIncrements('idEstadoMateria');
            $table->string('estadoMateria',30);
        });

        Schema::create('materias', function (Blueprint $table) {
            $table->bigIncrements('idMateria');
            $table->string('materia',70);
            $table->unsignedBigInteger('idEstadoMateria',);
            
        });

        //Agrega las foreing key a la tabla materias
        Schema::table('materias', function($table)
        {
            $table->foreign('idEstadoMateria')->references('idEstadoMateria')->on('estadoMaterias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadoMaterias');
        Schema::dropIfExists('materias');
    }
};
