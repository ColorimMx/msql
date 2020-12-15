@extends('layouts.app')

@section('title', 'Areas')
@section('nav')
    @parent
    <ul class="navbar-nav">

        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> NOM 35 STPS </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="guiaref1"> Guia de Referencia I</a></li>
            <li><a class="dropdown-item" href="guiaref2"> Guia de Referencia II</a></li>
            <li><a class="dropdown-item" href="guiaref3"> Guia de Referencia III</a></li>
            <li><a class="dropdown-item" href="guiaref4"> Guia de Referencia IV</a></li>
            <li><a class="dropdown-item" href="guiaref5"> Guia de Referencia V</a></li>
        </ul>
    </ul>
@endsection
@section('content')
    <div class="container">


        <div class="table-responsive-lg">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                </tr>
                </thead>
                @foreach($areas as $area)
                <tbody>
                <tr>
                        <td>{{$area->ID_AREA}}</td>
                        <td>{{$area->NOM_AREA}}</td
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
