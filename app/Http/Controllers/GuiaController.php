<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Preguntas_Detalle_Guia;
use App\Models\Referencia_Guia;
use App\Models\Preguntas_Guia;
use App\Models\Secciones_Guia;
use Illuminate\Http\Request;

class GuiaController extends Controller
{
    public function index(){
        $guias = Referencia_Guia::all();
        return view('Rhumanos/guias', compact('guias'));
    }




    public function gric1(){
        $empleados = Empleado::all()->sortBy('A_PATERNO');
        $sec1 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS1')->orderBy('NUMERO_PREGUNTA')->get();
        $sec2 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS2')->orderBy('NUMERO_PREGUNTA')->get();
        $sec3 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS3')->orderBy('NUMERO_PREGUNTA')->get();
        $sec4 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS4')->orderBy('NUMERO_PREGUNTA')->get();
        return view('Rhumanos/cues1',compact('sec1','sec2','sec3','sec4','empleados'));
    }

    public function gric2(){

        $empleados = Empleado::where('ID_EMPRESA', '=', 'CIMSA')->orderBy('A_PATERNO')->get();
        $secciones = Secciones_Guia::where('ID_SECCION_GUIA', 'LIKE', 'GRIIS%')->orderBy('ID_SECCION_GUIA')->get();
        $sec = Preguntas_Guia::where('ID_REFERENCIA_GUIA','=','GRII')->orderBy('NUMERO_PREGUNTA')->get();
        $sec1 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS1')->orderBy('NUMERO_PREGUNTA')->get();
        $sec2 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS2')->orderBy('NUMERO_PREGUNTA')->get();
        $sec3 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS3')->orderBy('NUMERO_PREGUNTA')->get();
        $sec4 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS4')->orderBy('NUMERO_PREGUNTA')->get();
        $sec5 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS5')->orderBy('NUMERO_PREGUNTA')->get();
        $sec6 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS6')->orderBy('NUMERO_PREGUNTA')->get();
        $sec7 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS7')->orderBy('NUMERO_PREGUNTA')->get();
        $sec8 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS8')->orderBy('NUMERO_PREGUNTA')->get();
        return view('Rhumanos/cues2',compact('secciones','sec','sec1','sec2','sec3','sec4','sec5','sec6','sec7','sec8','empleados'));
    }

    public function gric3(){

        $empleados = Empleado::where('ID_EMPRESA', '=', 'IARSA')->orderBy('A_PATERNO')->get();
        $secciones = Secciones_Guia::where('ID_SECCION_GUIA', 'LIKE', 'GRIIS%')->orderBy('ID_SECCION_GUIA')->get();
        $sec = Preguntas_Guia::where('ID_REFERENCIA_GUIA','=','GRIII')->orderBy('NUMERO_PREGUNTA')->get();
        $sec1 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS1')->orderBy('NUMERO_PREGUNTA')->get();
        $sec2 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS2')->orderBy('NUMERO_PREGUNTA')->get();
        $sec3 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS3')->orderBy('NUMERO_PREGUNTA')->get();
        $sec4 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS4')->orderBy('NUMERO_PREGUNTA')->get();
        $sec5 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS5')->orderBy('NUMERO_PREGUNTA')->get();
        $sec6 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS6')->orderBy('NUMERO_PREGUNTA')->get();
        $sec7 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS7')->orderBy('NUMERO_PREGUNTA')->get();
        $sec8 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS8')->orderBy('NUMERO_PREGUNTA')->get();
        $sec9 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS9')->orderBy('NUMERO_PREGUNTA')->get();
        $sec10 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS10')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec11 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS11')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec12 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS12')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec13 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS13')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec14 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIIS14')->orderBy('NUMERO_PREGUNTA')->get();;
        return view('Rhumanos/cues3',compact('secciones','sec','sec1','sec2','sec3','sec4','sec5','sec6','sec7','sec8',
        'sec9','sec10','sec11','sec12','sec13','sec14','empleados'));
    }
    public function create(){

    }

    public function show(){

    }

    public function storeGrI(Request $request)
    {
        $guiaRIP1 = new Preguntas_Detalle_Guia();
        $guiaRIP2 = new Preguntas_Detalle_Guia();
        $guiaRIP3 = new Preguntas_Detalle_Guia();
        $guiaRIP4 = new Preguntas_Detalle_Guia();
        $guiaRIP5 = new Preguntas_Detalle_Guia();
        $guiaRIP6 = new Preguntas_Detalle_Guia();
        $guiaRIP7 = new Preguntas_Detalle_Guia();
        $guiaRIP8 = new Preguntas_Detalle_Guia();
        $guiaRIP9 = new Preguntas_Detalle_Guia();
        $guiaRIP10 = new Preguntas_Detalle_Guia();
        $guiaRIP11 = new Preguntas_Detalle_Guia();
        $guiaRIP12 = new Preguntas_Detalle_Guia();
        $guiaRIP13 = new Preguntas_Detalle_Guia();
        $guiaRIP14 = new Preguntas_Detalle_Guia();
        $guiaRIP15 = new Preguntas_Detalle_Guia();
        $guiaRIP16 = new Preguntas_Detalle_Guia();
        $guiaRIP17 = new Preguntas_Detalle_Guia();
        $guiaRIP18 = new Preguntas_Detalle_Guia();
        $guiaRIP19 = new Preguntas_Detalle_Guia();
        $guiaRIP20 = new Preguntas_Detalle_Guia();


        $guiaRIP1->ID_PREGUNTA_DETALLE_GUIA = 'GRIP1'.$request->empleado;
        $guiaRIP1->ID_PREGUNTA_GUIA = 'GRIP1';
        $guiaRIP1->ID_Empleado = $request->empleado;
        $guiaRIP1->RESPUESTA = $request->GRIP1;

        $guiaRIP2->ID_PREGUNTA_DETALLE_GUIA = 'GRIP2'.$request->empleado;
        $guiaRIP2->ID_PREGUNTA_GUIA = 'GRIP2';
        $guiaRIP2->ID_Empleado = $request->empleado;
        $guiaRIP2->RESPUESTA = $request->GRIP2;

        $guiaRIP3->ID_PREGUNTA_DETALLE_GUIA = 'GRIP3'.$request->empleado;
        $guiaRIP3->ID_PREGUNTA_GUIA = 'GRIP3';
        $guiaRIP3->ID_Empleado = $request->empleado;
        $guiaRIP3->RESPUESTA = $request->GRIP3;

        $guiaRIP4->ID_PREGUNTA_DETALLE_GUIA = 'GRIP4'.$request->empleado;
        $guiaRIP4->ID_PREGUNTA_GUIA = 'GRIP4';
        $guiaRIP4->ID_Empleado = $request->empleado;
        $guiaRIP4->RESPUESTA = $request->GRIP4;

        $guiaRIP5->ID_PREGUNTA_DETALLE_GUIA = 'GRIP5'.$request->empleado;
        $guiaRIP5->ID_PREGUNTA_GUIA = 'GRIP5';
        $guiaRIP5->ID_Empleado = $request->empleado;
        $guiaRIP5->RESPUESTA = $request->GRIP5;

        $guiaRIP6->ID_PREGUNTA_DETALLE_GUIA = 'GRIP6'.$request->empleado;
        $guiaRIP6->ID_PREGUNTA_GUIA = 'GRIP6';
        $guiaRIP6->ID_Empleado = $request->empleado;
        $guiaRIP6->RESPUESTA = $request->GRIP6;

        $guiaRIP7->ID_PREGUNTA_DETALLE_GUIA = 'GRIP7'.$request->empleado;
        $guiaRIP7->ID_PREGUNTA_GUIA = 'GRIP7';
        $guiaRIP7->ID_Empleado = $request->empleado;
        $guiaRIP7->RESPUESTA = $request->GRIP7;

        $guiaRIP8->ID_PREGUNTA_DETALLE_GUIA = 'GRIP8'.$request->empleado;
        $guiaRIP8->ID_PREGUNTA_GUIA = 'GRIP8';
        $guiaRIP8->ID_Empleado = $request->empleado;
        $guiaRIP8->RESPUESTA = $request->GRIP8;

        $guiaRIP9->ID_PREGUNTA_DETALLE_GUIA = 'GRIP9'.$request->empleado;
        $guiaRIP9->ID_PREGUNTA_GUIA = 'GRIP9';
        $guiaRIP9->ID_Empleado = $request->empleado;
        $guiaRIP9->RESPUESTA = $request->GRIP9;

        $guiaRIP10->ID_PREGUNTA_DETALLE_GUIA = 'GRIP10'.$request->empleado;
        $guiaRIP10->ID_PREGUNTA_GUIA = 'GRIP10';
        $guiaRIP10->ID_Empleado = $request->empleado;
        $guiaRIP10->RESPUESTA = $request->GRIP10;

        $guiaRIP11->ID_PREGUNTA_DETALLE_GUIA = 'GRIP11'.$request->empleado;
        $guiaRIP11->ID_PREGUNTA_GUIA = 'GRIP11';
        $guiaRIP11->ID_Empleado = $request->empleado;
        $guiaRIP11->RESPUESTA = $request->GRIP11;

        $guiaRIP12->ID_PREGUNTA_DETALLE_GUIA = 'GRIP12'.$request->empleado;
        $guiaRIP12->ID_PREGUNTA_GUIA = 'GRIP12';
        $guiaRIP12->ID_Empleado = $request->empleado;
        $guiaRIP12->RESPUESTA = $request->GRIP12;

        $guiaRIP13->ID_PREGUNTA_DETALLE_GUIA = 'GRIP13'.$request->empleado;
        $guiaRIP13->ID_PREGUNTA_GUIA = 'GRIP13';
        $guiaRIP13->ID_Empleado = $request->empleado;
        $guiaRIP13->RESPUESTA = $request->GRIP13;

        $guiaRIP14->ID_PREGUNTA_DETALLE_GUIA = 'GRIP14'.$request->empleado;
        $guiaRIP14->ID_PREGUNTA_GUIA = 'GRIP14';
        $guiaRIP14->ID_Empleado = $request->empleado;
        $guiaRIP14->RESPUESTA = $request->GRIP14;

        $guiaRIP15->ID_PREGUNTA_DETALLE_GUIA = 'GRIP15'.$request->empleado;
        $guiaRIP15->ID_PREGUNTA_GUIA = 'GRIP15';
        $guiaRIP15->ID_Empleado = $request->empleado;
        $guiaRIP15->RESPUESTA = $request->GRIP15;

        $guiaRIP16->ID_PREGUNTA_DETALLE_GUIA = 'GRIP16'.$request->empleado;
        $guiaRIP16->ID_PREGUNTA_GUIA = 'GRIP16';
        $guiaRIP16->ID_Empleado = $request->empleado;
        $guiaRIP16->RESPUESTA = $request->GRIP16;

        $guiaRIP17->ID_PREGUNTA_DETALLE_GUIA = 'GRIP17'.$request->empleado;
        $guiaRIP17->ID_PREGUNTA_GUIA = 'GRIP17';
        $guiaRIP17->ID_Empleado = $request->empleado;
        $guiaRIP17->RESPUESTA = $request->GRIP17;

        $guiaRIP18->ID_PREGUNTA_DETALLE_GUIA = 'GRIP18'.$request->empleado;
        $guiaRIP18->ID_PREGUNTA_GUIA = 'GRIP18';
        $guiaRIP18->ID_Empleado = $request->empleado;
        $guiaRIP18->RESPUESTA = $request->GRIP18;

        $guiaRIP19->ID_PREGUNTA_DETALLE_GUIA = 'GRIP19'.$request->empleado;
        $guiaRIP19->ID_PREGUNTA_GUIA = 'GRIP19';
        $guiaRIP19->ID_Empleado = $request->empleado;
        $guiaRIP19->RESPUESTA = $request->GRIP19;

        $guiaRIP20->ID_PREGUNTA_DETALLE_GUIA = 'GRIP20'.$request->empleado;
        $guiaRIP20->ID_PREGUNTA_GUIA = 'GRIP20';
        $guiaRIP20->ID_Empleado = $request->empleado;
        $guiaRIP20->RESPUESTA = $request->GRIP20;

        /*return array ($guiaRIP1,$guiaRIP2,$guiaRIP3,$guiaRIP4,$guiaRIP5,$guiaRIP6,$guiaRIP7,$guiaRIP8,$guiaRIP9,
            $guiaRIP10,$guiaRIP11,$guiaRIP12,$guiaRIP13,$guiaRIP14,$guiaRIP15,$guiaRIP16,$guiaRIP17,$guiaRIP18,
    $guiaRIP19,$guiaRIP20);*/

        $guiaRIP1->save();
        $guiaRIP2->save();
        $guiaRIP3->save();
        $guiaRIP4->save();
        $guiaRIP5->save();
        $guiaRIP6->save();
        $guiaRIP7->save();
        $guiaRIP8->save();
        $guiaRIP9->save();
        $guiaRIP10->save();
        $guiaRIP11->save();
        $guiaRIP12->save();
        $guiaRIP13->save();
        $guiaRIP14->save();
        $guiaRIP15->save();
        $guiaRIP16->save();
        $guiaRIP17->save();
        $guiaRIP18->save();
        $guiaRIP19->save();
        $guiaRIP20->save();
    }
}
