<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJornadaTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JORNADA_TIPOS', function (Blueprint $table) {
            $table->string('ID_JORNADA_TIPO',6)->primary();
            $table->string('NOM_JORNADA_TIPO');
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
        Schema::dropIfExists('JORNADA_TIPOS');
    }
}
