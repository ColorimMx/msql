<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatusEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ESTATUS__ESTUDIOS', function (Blueprint $table) {
            $table->string('ID_ESTATUS_ESTUDIOS',6)->primary();
            $table->string('NOM_ESTATUS_ESTUDIOS');
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
        Schema::dropIfExists('ESTATUS__ESTUDIOS');
    }
}
