<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('titulo');
            $table->string('descripcion', 1000);
            $table->string('zona');     
            $table->integer('user_id')->unsigned();      
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            //$table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
