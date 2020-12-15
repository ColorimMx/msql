<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DEPARTAMENTOS', function (Blueprint $table) {
            $table->string('ID_DEPARTAMENTO',6)->primary();
            $table->string('ID_AREA',6);
            $table->foreign('ID_AREA')->references('ID_AREA')->on('AREAS');
            $table->string('NOM_DEPARTAMENTO');
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
        Schema::dropIfExists('DEPARTAMENTOS');
    }
}
