<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CONTRATO_TIPOS', function (Blueprint $table) {
            $table->string('ID_CONTRATO_TIPO',6)->primary();
            $table->string('NOM_CONTRATO_TIPO');
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
        Schema::dropIfExists('CONTRATO_TIPOS');
    }
}
