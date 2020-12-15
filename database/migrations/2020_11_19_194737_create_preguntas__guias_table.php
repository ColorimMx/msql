<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PREGUNTAS_GUIAS', function (Blueprint $table) {
            $table->string('ID_PREGUNTA_GUIA',10)->primary();
            $table->integer('NUMERO_PREGUNTA');
            $table->string('PREGUNTA');
            $table->string('ID_REFERENCIA_GUIA',6);
            $table->foreign('ID_REFERENCIA_GUIA')->references('ID_REFERENCIA_GUIA')->on('REFERENCIA_GUIAS');
            $table->string('ID_SECCION_GUIA',10);
            $table->foreign('ID_SECCION_GUIA')->references('ID_SECCION_GUIA')->on('SECCIONES_GUIAS');
            $table->string('ID_PREGUNTA_CATEGORIA',10);
            $table->foreign('ID_PREGUNTA_CATEGORIA')->references('ID_PREGUNTA_CATEGORIA')->on('PREGUNTAS_CATEGORIAS');
            $table->string('ID_PREGUNTA_DOMINIO',10);
            $table->foreign('ID_PREGUNTA_DOMINIO')->references('ID_PREGUNTA_DOMINIO')->on('PREGUNTAS_DOMINIOS');
            $table->string('ID_PREGUNTA_DIMENSION',10);
            $table->foreign('ID_PREGUNTA_DIMENSION')->references('ID_PREGUNTA_DIMENSION')->on('PREGUNTAS_DIMENSIONES');
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
        Schema::dropIfExists('PREGUNTAS_GUIAS');
    }
}
