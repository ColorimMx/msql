<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PREGUNTAS_CATEGORIAS', function (Blueprint $table) {
            $table->string('ID_PREGUNTA_CATEGORIA',10)->primary();
            $table->string('NOM_PREGUNTA_CATEGORIA');
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
        Schema::dropIfExists('PREGUNTAS_CATEGORIAS');
    }
}
