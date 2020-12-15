@extends('layouts.app')

@section('title', 'Guia de Referencia I')

@section('nav')
    @parent
    <ul class="navbar-nav">
        <a class="nav-link"> Guia de Referencia I </a>
    </ul>
@endsection

@section('content')
    <h6>CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A ACONTECIMIENTOS TRAUMÁTICOS SEVEROS.</h6>
    <p>El contenido de esta guía es un complemento para la mejor comprensión de la presente Norma.</p>

    <p>GR.I El cuestionario deberá aplicarse conforme a lo siguiente:</p>
    <p>a) Si todas las respuestas a la Sección I Acontecimiento traumático severo, son "NO", no es necesario responder
        las demás secciones, y el trabajador no requiere una valoración clínica, y</p>
    <p>b) En caso contrario, si alguna respuesta a la Sección I es "SÍ", se requiere contestar las secciones: II
        Recuerdos persistentes sobre el acontecimiento, III Esfuerzo por evitar circunstancias parecidas o asociadas al
        acontecimiento y IV Afectación, el trabajador requerirá atención clínica en cualquiera de los casos
        siguientes:</p>
    <p>1) Cuando responda "Sí", en alguna de las preguntas de la Sección II Recuerdos persistentes sobre
        acontecimiento;</p>
    <p>2) Cuando responda "Sí", en tres o más de las preguntas de la Sección III Esfuerzo por evitar circunstancias
        parecidas o asociadas al acontecimiento, o</p>
    <p>3) Cuando responda "Sí", en dos o más de las preguntas de la Sección IV Afectación.</p>
    <p><a href="cues1" class="btn btn-success"> &oplus; Aplicar Guia de Referencia I</a>
        <a href="#" class="btn btn-info"> &checkmark; Consultar Guia de Referencia I</a></p>
    <div class="fixed-bottom">
        <a href="/" class="btn btn-primary"> &laquo Home</a>
        <a href="nom35" class="btn btn-primary"> &laquo NOM 35 STPS</a>
    </div>
@endsection
