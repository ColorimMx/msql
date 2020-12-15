<?php

namespace App\Http\Controllers;

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
        $sec1 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS1')->orderBy('NUMERO_PREGUNTA')->get();
        $sec2 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS2')->orderBy('NUMERO_PREGUNTA')->get();
        $sec3 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS3')->orderBy('NUMERO_PREGUNTA')->get();
        $sec4 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS4')->orderBy('NUMERO_PREGUNTA')->get();
        return view('Rhumanos/cues1',compact('sec1','sec2','sec3','sec4'));
    }

    public function gric2(){

        $secciones = Secciones_Guia::where('ID_SECCION_GUIA', 'LIKE', 'GRIIS%')->orderBy('ID_SECCION_GUIA')->get();
        $sec = Preguntas_Guia::where('ID_REFERENCIA_GUIA','=','GRII')->orderBy('NUMERO_PREGUNTA')->get();
        $sec1 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS1')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec2 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS2')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec3 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS3')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec4 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS4')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec5 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS5')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec6 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS6')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec7 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS7')->orderBy('NUMERO_PREGUNTA')->get();;
        $sec8 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIIS8')->orderBy('NUMERO_PREGUNTA')->get();;
        return view('Rhumanos/cues2',compact('secciones','sec','sec1','sec2','sec3','sec4','sec5','sec6','sec7','sec8'));
    }

    public function create(){

    }

    public function show(){

    }
}
