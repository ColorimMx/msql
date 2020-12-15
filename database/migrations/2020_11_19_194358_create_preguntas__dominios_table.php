<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasDominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PREGUNTAS_DOMINIOS', function (Blueprint $table) {
            $table->string('ID_PREGUNTA_DOMINIO',10)->primary();
            $table->string('NOM_PREGUNTA_DOMINIO');
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
        Schema::dropIfExists('PREGUNTAS_DOMINIOS');
    }
}
