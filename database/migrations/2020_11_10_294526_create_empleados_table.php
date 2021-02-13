<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EMPLEADOS', function (Blueprint $table) {
            //$table->id();

            $table->string('ID_EMPLEADO',5)->primary();
            $table->string('A_PATERNO');
            $table->string('A_MATERNO');
            $table->string('NOMBRES');
            $table->date('F_NACIMIENTO');
            $table->string('ID_AREA',6);
            $table->foreign('ID_AREA')->references('ID_AREA')->on('AREAS');
            $table->string('ID_DEPARTAMENTO',6);
            $table->foreign('ID_DEPARTAMENTO')->references('ID_DEPARTAMENTO')->on('DEPARTAMENTOS');
            $table->string('ID_PUESTO',6);
            $table->foreign('ID_PUESTO')->references('ID_PUESTO')->on('PUESTOS');
            $table->string('ID_PUESTO_TIPO',6);
            $table->foreign('ID_PUESTO_TIPO')->references('ID_PUESTO_TIPO')->on('PUESTOS_TIPOS');
            $table->date('F_INGRESO');
            $table->char('SEXO',1);
            $table->string('CURP',18);
            $table->string('RFC',13);
            $table->string('NSS',16);
            $table->string('ID_CIVIL_ESTADO',6);
            $table->foreign('ID_CIVIL_ESTADO')->references('ID_CIVIL_ESTADO')->on('CIVIL_ESTADOS');
            $table->string('ID_ESTUDIO_NIVEL',6);
            $table->foreign('ID_ESTUDIO_NIVEL')->references('ID_ESTUDIO_NIVEL')->on('ESTUDIO_NIVELES');
            $table->string('ID_CONTRATO_TIPO',6);
            $table->foreign('ID_CONTRATO_TIPO')->references('ID_CONTRATO_TIPO')->on('CONTRATO_TIPOS');
            $table->string('ID_PERSONAL_TIPO',6);
            $table->foreign('ID_PERSONAL_TIPO')->references('ID_PERSONAL_TIPO')->on('PERSONAL_TIPOS');
            $table->string('ID_JORNADA_TIPO',6);
            $table->foreign('ID_JORNADA_TIPO')->references('ID_JORNADA_TIPO')->on('JORNADA_TIPOS');
            $table->boolean('ROTACION_TURNO');
            $table->boolean('CLIENTES_USUARIOS');
            $table->boolean('JEFE');
            $table->string('ID_NOMINA_TIPO',6);
            $table->foreign('ID_NOMINA_TIPO')->references('ID_NOMINA_TIPO')->on('NOMINA_TIPOS');
            $table->string('ID_LOCALIDAD',6);
            $table->foreign('ID_LOCALIDAD')->references('ID_LOCALIDAD')->on('LOCALIDADES');
            $table->string('ID_EMPRESA',6);
            $table->foreign('ID_EMPRESA')->references('ID_EMPRESA')->on('EMPRESAS');
            $table->string('CALLE',6)->nullable();
            $table->string('NUM_EXT',6)->nullable();
            $table->string('NUM_INT',6)->nullable();
            $table->string('COLONIA',6)->nullable();
            $table->string('ID_MUNICIPIO',6)->nullable();
            $table->string('CP',6)->nullable();
            $table->string('ID_ESTADO',6)->nullable();
            $table->string('ID_PAIS',6)->nullable();
            $table->string('EMAIL',6)->nullable();
            $table->string('TELEFONO_1',6)->nullable();
            $table->string('TELEFONO_2',6)->nullable();
            $table->boolean('GUIA_I');
            $table->boolean('GUIA_II');
            $table->boolean('GUIA_III');
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
        Schema::dropIfExists('EMPLEADOS');
    }
}
