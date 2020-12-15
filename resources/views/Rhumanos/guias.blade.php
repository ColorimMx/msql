@extends('layouts.app')

@section('title', 'Guias de referencia')
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
                @foreach($guias as $guia)
                    <tbody>
                    <tr>
                        <td>{{$guia->ID_REFERENCIA_GUIA}}</td>
                        <td>{{$guia->NOM_REFERENCIA_GUIA}}</td
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>


@endsection
