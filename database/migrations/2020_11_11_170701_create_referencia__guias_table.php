<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenciaGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REFERENCIA_GUIAS', function (Blueprint $table) {
            $table->string('ID_REFERENCIA_GUIA',6)->primary();
            $table->string('NOM_REFERENCIA_GUIA');
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
        Schema::dropIfExists('REFERENCIA_GUIAS');
    }
}
