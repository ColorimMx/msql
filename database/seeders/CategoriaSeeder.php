<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catalogo1 = new Catalogo();
        $catalogo1->ID_CATALOGO = "C00001";
        $catalogo1->NOM_CATALOGO = "AREAS";
        $catalogo1->VISTA = "";
        $catalogo1->save();

        $catalogo2 = new Catalogo();
        $catalogo2->ID_CATALOGO = "C00002";
        $catalogo2->NOM_CATALOGO = "CATEGORIAS";
        $catalogo2->VISTA = "";
        $catalogo2->save();

        $catalogo3 = new Catalogo();
        $catalogo3->ID_CATALOGO = "C00003";
        $catalogo3->NOM_CATALOGO = "CIVIL_ESTADOS";
        $catalogo3->VISTA = "";
        $catalogo3->save();

        $catalogo4 = new Catalogo();
        $catalogo4->ID_CATALOGO = "C00004";
        $catalogo4->NOM_CATALOGO = "CONTRATO_TIPOS";
        $catalogo4->VISTA = "";
        $catalogo4->save();

        $catalogo5 = new Catalogo();
        $catalogo5->ID_CATALOGO = "C00005";
        $catalogo5->NOM_CATALOGO = "DEPARTAMENTOS";
        $catalogo5->VISTA = "";
        $catalogo5->save();

        $catalogo6 = new Catalogo();
        $catalogo6->ID_CATALOGO = "C00006";
        $catalogo6->NOM_CATALOGO = "EMPLEADOS";
        $catalogo6->VISTA = "";
        $catalogo6->save();

        $catalogo7 = new Catalogo();
        $catalogo7->ID_CATALOGO = "C00007";
        $catalogo7->NOM_CATALOGO = "EMPRESAS";
        $catalogo7->VISTA = "";
        $catalogo7->save();

        $catalogo8 = new Catalogo();
        $catalogo8->ID_CATALOGO = "C00008";
        $catalogo8->NOM_CATALOGO = "ESTATUS__ESTUDIOS";
        $catalogo8->VISTA = "";
        $catalogo8->save();

        $catalogo9 = new Catalogo();
        $catalogo9->ID_CATALOGO = "C00009";
        $catalogo9->NOM_CATALOGO = "ESTUDIO_NIVELES";
        $catalogo9->VISTA = "";
        $catalogo9->save();

        $catalogo10 = new Catalogo();
        $catalogo10->ID_CATALOGO = "C00010";
        $catalogo10->NOM_CATALOGO = "JORNADA_TIPOS";
        $catalogo10->VISTA = "";
        $catalogo10->save();

        $catalogo11 = new Catalogo();
        $catalogo11->ID_CATALOGO = "C00011";
        $catalogo11->NOM_CATALOGO = "LOCALIDADES";
        $catalogo11->VISTA = "";
        $catalogo11->save();

        $catalogo12 = new Catalogo();
        $catalogo12->ID_CATALOGO = "C00012";
        $catalogo12->NOM_CATALOGO = "NOMINA_TIPOS";
        $catalogo12->VISTA = "";
        $catalogo12->save();

        $catalogo13 = new Catalogo();
        $catalogo13->ID_CATALOGO = "C00013";
        $catalogo13->NOM_CATALOGO = "PERSONAL_TIPOS";
        $catalogo13->VISTA = "";
        $catalogo13->save();

        $catalogo14 = new Catalogo();
        $catalogo14->ID_CATALOGO = "C00014";
        $catalogo14->NOM_CATALOGO = "PREGUNTAS_CATEGORIAS";
        $catalogo14->VISTA = "";
        $catalogo14->save();

        $catalogo15 = new Catalogo();
        $catalogo15->ID_CATALOGO = "C00015";
        $catalogo15->NOM_CATALOGO = "PREGUNTAS_DETALLE_GUIAS";
        $catalogo15->VISTA = "";
        $catalogo15->save();

        $catalogo16 = new Catalogo();
        $catalogo16->ID_CATALOGO = "C00016";
        $catalogo16->NOM_CATALOGO = "PREGUNTAS_DIMENSIONES";
        $catalogo16->VISTA = "";
        $catalogo16->save();

        $catalogo17 = new Catalogo();
        $catalogo17->ID_CATALOGO = "C00017";
        $catalogo17->NOM_CATALOGO = "PREGUNTAS_DOMINIOS";
        $catalogo17->VISTA = "";
        $catalogo17->save();

        $catalogo18 = new Catalogo();
        $catalogo18->ID_CATALOGO = "C00018";
        $catalogo18->NOM_CATALOGO = "PREGUNTAS_GUIAS";
        $catalogo18->VISTA = "";
        $catalogo18->save();

        $catalogo19 = new Catalogo();
        $catalogo19->ID_CATALOGO = "C00019";
        $catalogo19->NOM_CATALOGO = "PUESTOS";
        $catalogo19->VISTA = "";
        $catalogo19->save();

        $catalogo20 = new Catalogo();
        $catalogo20->ID_CATALOGO = "C00020";
        $catalogo20->NOM_CATALOGO = "PUESTOS_TIPOS";
        $catalogo20->VISTA = "";
        $catalogo20->save();

        $catalogo21 = new Catalogo();
        $catalogo21->ID_CATALOGO = "C00021";
        $catalogo21->NOM_CATALOGO = "REFERENCIA_GUIAS";
        $catalogo21->VISTA = "";
        $catalogo21->save();

        $catalogo22 = new Catalogo();
        $catalogo22->ID_CATALOGO = "C00022";
        $catalogo22->NOM_CATALOGO = "SECCIONES_GUIAS";
        $catalogo22->VISTA = "";
        $catalogo22->save();
    }
}
