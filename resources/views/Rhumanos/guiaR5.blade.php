@extends('layouts.app')

@section('title', 'Guia de Referencia V')

@section('nav')
    @parent
    <ul class="navbar-nav">
        <a class="nav-link"> Guia de Referencia V </a>
    </ul>
@endsection

@section('content')
    <h6>Datos del trabajador.</h6>
    <p>El contenido de esta guía es un complemento para la mejor comprensión de la presente Norma.</p>
<p>
    <a href="#" class="btn btn-success"> &oplus; Aplicar Guia de Referencia V</a>

    <a href="#" class="btn btn-info"> &checkmark; Consultar Guia de Referencia V</a>

</p>
    <div class="fixed-bottom">
        <a href="/" class="btn btn-primary"> &laquo Home</a>
        <a href="nom35" class="btn btn-primary"> &laquo NOM 35 STPS</a>
    </div>

@endsection
