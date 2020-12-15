<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivilEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CIVIL_ESTADOS', function (Blueprint $table) {
            $table->string('ID_CIVIL_ESTADO',6)->primary();
            $table->string('NOM_CIVIL_ESTADO');
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
        Schema::dropIfExists('CIVIL_ESTADOS');
    }
}
