<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasDimensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PREGUNTAS_DIMENSIONES', function (Blueprint $table) {
            $table->string('ID_PREGUNTA_DIMENSION',10)->primary();
            $table->string('NOM_PREGUNTA_DIMENSION');
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
        Schema::dropIfExists('PREGUNTAS_DIMENSIONES');
    }
}
