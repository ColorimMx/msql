<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PERSONAL_TIPOS', function (Blueprint $table) {
            $table->string('ID_PERSONAL_TIPO',6)->primary();
            $table->string('NOM_PERSONAL_TIPO');
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
        Schema::dropIfExists('PERSONAL_TIPOS');
    }
}
