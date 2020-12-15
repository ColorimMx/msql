<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudioNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ESTUDIO_NIVELES', function (Blueprint $table) {
            $table->string('ID_ESTUDIO_NIVEL',6)->primary();
            $table->string('NOM_ESTUDIO_NIVEL');
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
        Schema::dropIfExists('ESTUDIO_NIVELES');
    }
}
