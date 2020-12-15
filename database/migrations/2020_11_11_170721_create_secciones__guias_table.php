<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionesGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SECCIONES_GUIAS', function (Blueprint $table) {
            $table->string('ID_SECCION_GUIA',10)->primary();
            $table->string('NOM_SECCION_GUIA');
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
        Schema::dropIfExists('SECCIONES_GUIAS');
    }
}
