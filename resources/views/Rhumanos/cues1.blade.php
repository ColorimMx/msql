@extends('layouts.app')
@section('title', 'Cuestionario 1')
@section('content')
<div class="container">
    <section id="inicio">
        <h2>CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A ACONTECIMIENTOS TRAUMÁTICOS SEVEROS</h2>
    </section>
    <form class="was-validated">
        <br>
        <div class="row">
            <div class="row justify-content-between">
                <section id="acontecimiento" class="custom-control custom-checkbox mb-3">
                    <h3>I.- Acontecimiento traumático severo:</h3>
                    <h4>¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:</h4>
@foreach($sec1 as $cue1)
        <p>{{$cue1->NUMERO_PREGUNTA}}.- {{$cue1->PREGUNTA}}</p>
        <select id="g1s1p1" name="g1s1p1"  class="custom-select" required>
            <option value="">Seleccione una respuesta</option>
            <option value="0">No</option>
            <option value="1">Si</option>
        </select>
@endforeach
                </section>
                <section id="recuerdo">
                    <h3>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>
                    @foreach($sec2 as $cue2)
                        <p>{{$cue2->NUMERO_PREGUNTA}}.- {{$cue2->PREGUNTA}}</p>
                        <select id="g1s1p1" name="g1s1p1"  class="custom-select" required>
                            <option value="">Seleccione una respuesta</option>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    @endforeach
                </section>
                <section id="esfuerzo">
                    <h3>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h3>
                    @foreach($sec3 as $cue3)
                        <p>{{$cue3->NUMERO_PREGUNTA}}.- {{$cue3->PREGUNTA}}</p>
                        <select id="g1s1p1" name="g1s1p1"  class="custom-select" required>
                            <option value="">Seleccione una respuesta</option>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    @endforeach
                </section>
                <section id="afectacion">
                    <h3>IV.- Afectación (durante el último mes):</h3>
                    @foreach($sec4 as $cue4)
                        <p>{{$cue4->NUMERO_PREGUNTA}}.- {{$cue4->PREGUNTA}}</p>
                        <select id="g1s1p1" name="g1s1p1"  class="custom-select" required>
                            <option value="">Seleccione una respuesta</option>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    @endforeach
                </section>
            </div>
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Submit form</button>
    </form>
</div>
@endsection
