@extends('layouts.app')
@foreach($empleados as $empleado)
@if($empleado->ID_EMPRESA == 'CIMSA')
    @section('title','Colorantes Importados SA de CV - Datos Guia de Referencia 5')
    @section('head','Colorantes Importados SA de CV')
@else
    @section('title','Industrias Arcoiris SA de CV - Datos Guia de Referencia 5')
    @section('head','Industrias Arcoiris SA de CV')
    @endif
@endforeach
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
    @foreach($empleados as $empleado)
    <div class="container">
        <form class="was-validated">
        <p>Número de Cuestionario: {{$empleado->ID_EMPLEADO}}</p>
        <p>Fecha de aplicación:</p>
        <h3>Información del trabajador</h3>
        <p class="text-light bg-dark">Sexo:</p>
        @if($empleado->SEXO =='H')
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sexoChkbox1" value="option1"  checked="checked" required>
                        <label class="form-check-label" for="sexoChkbox1">Masculino</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sexoChkbox2" value="option2" disabled="disabled" >
                        <label class="form-check-label" for="sexoChkbox2">Femenino</label>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sexoChkbox1" value="option1" disabled="disabled" >
                        <label class="form-check-label" for="sexoChkbox1">Masculino</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sexoChkbox2" value="option2" checked="checked" required>
                        <label class="form-check-label" for="sexoChkbox2">Femenino</label>
                    </div>
                </div>
            </div>
        @endif
            <br>
        <p>Edad en años:</p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox1" value=""
                        @if($edad==1)
                        checked="checked" required
                               @else
                               disabled="disabled"
                               @endif>
                        <label class="form-check-label" for="edadChkbox1">15 - 19</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox2" value=""
                               @if($edad==2)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox2">20 - 24</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox3" value=""
                               @if($edad==3)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox3">25 - 29</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox4" value=""
                               @if($edad==4)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox4">30 - 34</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox5" value=""
                               @if($edad==5)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox5">35 - 39</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox6" value=""
                               @if($edad==6)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox6">40 - 44</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox7" value=""
                               @if($edad==7)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox7">45 - 49</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox8" value=""
                               @if($edad==8)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox8">50 - 54</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox9" value=""
                               @if($edad==9)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox9">55 - 59</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox10" value=""
                               @if($edad==10)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox10">60 - 64</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox11" value=""
                               @if($edad==11)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox11">65 - 79</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edadChkbox12" value=""
                               @if($edad==12)
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="edadChkbox12">70 o más</label>
                    </div>
                </div>
            </div>
            <br>
            <p class="text-light bg-dark">Estado Civil:</p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="civilChkbox1" value=""
                               @if($empleado->ID_CIVIL_ESTADO == "CASAD")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="civilChkbox1">Casado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="civilChkbox2" value=""
                               @if($empleado->ID_CIVIL_ESTADO == "SOLTE")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="civilChkbox2">Soltero</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="civilChkbox3" value=""
                               @if($empleado->ID_CIVIL_ESTADO == "UNILI")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="civilChkbox3">Unión Libre</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="civilChkbox4" value=""
                               @if($empleado->ID_CIVIL_ESTADO == "DIVOR")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="civilChkbox4">Divorciado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="civilChkbox5" value=""
                               @if($empleado->ID_CIVIL_ESTADO == "VIUDO")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="civilChkbox5">Viudo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="civilChkbox6" value=""
                               @if($empleado->ID_CIVIL_ESTADO == "OTRO")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="civilChkbox6"></label>
                    </div>
                </div>
            </div>
            <br>
            <p class="text-light bg-dark">Nivel de estudios:</p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox1" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "SINFO")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox1">Sin formación</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox2" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "PRIMA")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox2">Primaria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox3" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "SECUND")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox3">Secundaria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox4" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "PREBA")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox4">Preparatoria o Bachillerato</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox5" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "TECSU")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox5">Técnico Superior</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox6" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "LICEN")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox6">Licenciatura</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox7" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "MAEST")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox7">Maestría</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estudiosChkbox8" value=""
                               @if($empleado->ID_ESTUDIO_NIVEL == "DOCTO")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="estudiosChkbox8">Doctorado</label>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <p class="bg-secondary text-white text-center">Datos laborales:</p>
            <p class="text-light bg-dark">Ocupacion/Profesion/Puesto: {{$empleado->ID_PUESTO}}</p>
            <p class="text-light bg-dark">Departamento/Sección/Área: {{$empleado->ID_DEPARTAMENTO}} {{$empleado->ID_AREA}}</p>
            <br>
            <p class=" bg-dark text-white">Tipo de puesto:</p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="puestoChkbox1" value=""
                               @if($empleado->ID_PUESTO_TIPO == "OPERA")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="puestoChkbox1">Operativo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="puestoChkbox2" value=""
                               @if($empleado->ID_PUESTO_TIPO == "PROTE")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="puestoChkbox2">Profesional o técnico</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="puestoChkbox3" value=""
                               @if($empleado->ID_PUESTO_TIPO == "SUPER")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="puestoChkbox3">Supervisor</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="puestoChkbox4" value=""
                               @if($empleado->ID_PUESTO_TIPO == "GEREN")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="puestoChkbox4">Gerente</label>
                    </div>
                </div>
            </div>
            <br>
            <p class=" bg-dark text-white">Tipo de contratación:</p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="contratoChkbox1" value=""
                               @if($empleado->ID_CONTRATO_TIPO == "OBRPR")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="contratoChkbox1">Por obra o proyecto</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="contratoChkbox2" value=""
                               @if($empleado->ID_CONTRATO_TIPO == "TEMPO ")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="contratoChkbox2">Por tiempo determinado (temporal)</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="contratoChkbox3" value=""
                               @if($empleado->ID_CONTRATO_TIPO == "TEMPI ")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="contratoChkbox3">Tiempo indeterminado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="contratoChkbox4" value=""
                               @if($empleado->ID_CONTRATO_TIPO == "HONOR")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="contratoChkbox4">Honorarios</label>
                    </div>
                </div>
            </div>
            <br>
            <p class=" bg-dark text-white">Tipo de personal:</p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="personalChkbox1" value=""
                               @if($empleado->ID_PERSONAL_TIPO == "SINDI")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="personalChkbox1">Sindicalizado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="personalChkbox2" value=""
                               @if($empleado->ID_PERSONAL_TIPO == "NINGU")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="personalChkbox2">Ninguno</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="personalChkbox3" value=""
                               @if($empleado->ID_PERSONAL_TIPO == "CONFI")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="personalChkbox3">Confianza</label>
                    </div>
                </div>
            </div>
            <br>
            <p class=" bg-dark text-white">Tipo de personal:</p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="jornadaChkbox1" value=""
                               @if($empleado->ID_JORNADA_TIPO == "FINOC")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="jornadaChkbox1">Fijo nocturno (entre las 20:00 y 06:00 hrs)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="jornadaChkbox2" value=""
                               @if($empleado->ID_JORNADA_TIPO == "FIDIU")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="jornadaChkbox2">Fijo diurno (entre las 06:00 y 20:00 hrs)</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="jornadaChkbox3" value=""
                               @if($empleado->ID_JORNADA_TIPO == "FIMIX")
                               checked="checked" required
                               @else
                               disabled="disabled"
                            @endif>
                        <label class="form-check-label" for="jornadaChkbox3">Fijo mixto (combinación nocturo y diurno)</label>
                    </div>
                </div>
            </div>
            @endforeach
        </form>
    </div>
@endsection

