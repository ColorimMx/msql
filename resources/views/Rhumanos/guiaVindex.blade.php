@extends('layouts.app')

@section('title', 'Datos Guia de Referencia 5')
@section('nav')
    @parent
    <ul class="navbar-nav">

        <a class="nav-link  dropdown-toggle" data-toggle="dropdown"> NOM 35 STPS </a>
        <ul class="dropdown-menu">
            <?php
            $i = 1;
            ?>
            @foreach($lguia as $lguia)
                <li><a class="dropdown-item" href="../guia{{ $i++ }}">{{$lguia->NOM_REFERENCIA_GUIA}}</a></li>
            @endforeach
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
                        <td><a href="{{route('guiaV.show',$empleado->ID_EMPLEADO)}}">{{$empleado->ID_EMPLEADO}}</a></td>
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
