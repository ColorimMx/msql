<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNominaTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NOMINA_TIPOS', function (Blueprint $table) {
            $table->string('ID_NOMINA_TIPO',6)->primary();
            $table->string('NOM_NOMINA_TIPO');
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
        Schema::dropIfExists('NOMINA_TIPOS');
    }
}
