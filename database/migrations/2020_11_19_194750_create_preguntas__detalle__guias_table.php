<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasDetalleGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PREGUNTAS_DETALLE_GUIAS', function (Blueprint $table) {
            $table->string('ID_PREGUNTA_DETALLE_GUIA',6)->primary();
            $table->string('ID_PREGUNTA_GUIA',10);
            $table->foreign('ID_PREGUNTA_GUIA')->references('ID_PREGUNTA_GUIA')->on('PREGUNTAS_GUIAS');
            $table->string('ID_EMPLEADO',5);
            $table->foreign('ID_EMPLEADO')->references('ID_EMPLEADO')->on('EMPLEADOS');
            $table->string('RESPUESTA');
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
        Schema::dropIfExists('PREGUNTAS_DETALLE_GUIAS');
    }
}
