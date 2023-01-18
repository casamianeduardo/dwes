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
        Schema::create('alumnos_cursos', function (Blueprint $table) {
            $table->id();
            //profesores
            $table->unsignedBigInteger('alumno_id');//se crea el campo
            $table->foreign('alumno_id')->references('id')->on('alumnos');//el enlace de fk
            //cursos
            $table->unsignedBigInteger('curso_id');//se crea el campo
            $table->foreign('curso_id')->references('id')->on('cursos');//el enlace de fk

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
        Schema::dropIfExists('alumnos_cursos');
    }
};
