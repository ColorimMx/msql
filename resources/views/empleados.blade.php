@extends('layouts.app')

@section('title', 'EMPLEADOS')
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


        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">APELLIDO PATERNO</th>
                    <th scope="col">APELLIDO MATERNO</th>
                    <th scope="col">NOMBRE(S)</th>
                </tr>
                </thead>

                <?php
                $i = 1;
                ?>
                @foreach($empleados->sortBy('A_PATERNO') as $empleado)
                    <tbody>
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$empleado->ID_EMPLEADO}}</td>
                        <td>{{$empleado->A_PATERNO}}</td>
                        <td>{{$empleado->A_MATERNO}}</td>
                        <td>{{$empleado->NOMBRES}}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
