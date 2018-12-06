<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta',255);
            $table->string('categoria', 255);
            $table->string('respuesta_correcta', 255);
            $table->string('respuesta_incorrecta_01', 255);
            $table->string('respuesta_incorrecta_02', 255);
            $table->string('respuesta_incorrecta_03', 255);
            $table->tinyInteger('dificultad');
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
        Schema::dropIfExists('questions');
    }
}
