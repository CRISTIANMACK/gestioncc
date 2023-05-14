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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string('email',60)->unique();
            $table->string('password',50);
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('fechaCreacion',30)->nullable();
            $table->unsignedBigInteger('idRol');
            $table->unsignedBigInteger('idEstadoUsuario');
            
        });

        Schema::table('usuarios', function($table)
        {
            $table->foreign('idRol')->references('idRol')->on('roles');
            $table->foreign('idEstadoUsuario')->references('idEstadoUsuario')->on('estadoUsuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
