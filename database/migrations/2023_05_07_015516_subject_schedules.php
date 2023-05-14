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
        Schema::create('horarioMaterias', function (Blueprint $table) {
            $table->bigIncrements('idHorarioMateria');
            $table->unsignedBigInteger('idMateria');
            $table->unsignedBigInteger('idDia');
            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('idCiclo');
            $table->string('horaInicio',30);
            $table->string('horaFin',30);
            $table->integer('cantidadEstudiante');
            $table->char('estado',1)->default('1');
            
        });

        Schema::table('horarioMaterias', function($table)
        {
            $table->foreign('idMateria')->references('idMateria')->on('materias');
            $table->foreign('idDia')->references('idDia')->on('dias');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
            $table->foreign('idCiclo')->references('idCiclo')->on('ciclos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjectSchedules');
    }
};
