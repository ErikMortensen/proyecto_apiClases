<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id')->unsigned(); 
            $table->dateTime('fecha_hora');
            $table->string('duracion');
            $table->integer('cant_alumnos')->unsigned();
            $table->string('direccion');
            $table->integer('student_id')->unsigned();
            $table->string('transaccion');
            $table->integer('materia_teacher_id')->unsigned()->nullable();
            $table->string('descripcion', 1000);
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('materia_teacher_id')->references('id')->on('materia_teacher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
}
