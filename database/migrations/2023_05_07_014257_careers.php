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
        Schema::create('facultades', function (Blueprint $table) {
            $table->bigIncrements('idFacultad');
            $table->string('facultad',70);
        });

        Schema::create('carreras', function (Blueprint $table) {
            $table->bigIncrements('idCarrera');
            $table->unsignedBigInteger('idFacultad');
            $table->string('carrera',70);
            
        });

        Schema::table('carreras', function($table)
        {
            $table->foreign('idFacultad')->references('idFacultad')->on('facultades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facultades');
        Schema::dropIfExists('carreras');
    }
};
