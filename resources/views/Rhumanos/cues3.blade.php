@extends('layouts.app')
@section('title', 'Cuestionario 2')
@section('content')
    <div class="container">

        <section id="inicio">
            <h2 class="text-center">GUIA DE REFERENCIA 3</h2>
            <br>
            <h2 class="text-center">CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS DE TRABAJO</h2>
            <br>
            <br>
        </section>
        <form class="was-validated">
            <p>Para responder las preguntas siguientes considere las condiciones de su centro de trabajo.</p>
            <br>
            <br>
            <fieldset id = "empleados">
                    <select id="empleado" name="empleado"  class="custom-select" required>
                        <option value="">Seleccione un empleado</option>
                        <?php
                        $i = 1;
                        ?>
                        @foreach($empleados as $empleado)
                        <option value="0">{{ $i++ }}.- {{$empleado->A_PATERNO}} {{$empleado->A_MATERNO}} {{$empleado->NOMBRES}} - {{$empleado->ID_EMPLEADO}}</option>
                        @endforeach
                    </select>
                <br>
                <br>
            </fieldset>
            <fieldset id = "s1">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec1 as $s1)
                            <tr>
                                <th scope="row">{{$s1->NUMERO_PREGUNTA}}</th>
                                <td>{{$s1->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s1->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s1->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s1->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s1->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s1->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s1->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s1->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s1->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s1->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s1->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                    <br>
                </div>
            </fieldset>
            <fieldset id = "s2">
                <p>Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.</p>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec2 as $s2)
                            <tr>
                                <th scope="row">{{$s2->NUMERO_PREGUNTA}}</th>
                                <td>{{$s2->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s2->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s2->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s2->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s2->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s2->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s2->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s2->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s2->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s2->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s2->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s3">
                <p>Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</p>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec3 as $s3)
                            <tr>
                                <th scope="row">{{$s3->NUMERO_PREGUNTA}}</th>
                                <td>{{$s3->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s3->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s3->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s3->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s3->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s3->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s3->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s3->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s3->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s3->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s3->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s4">
                <p>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</p>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec4 as $s4)
                            <tr>
                                <th scope="row">{{$s4->NUMERO_PREGUNTA}}</th>
                                <td>{{$s4->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s4->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s4->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s4->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s4->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s4->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s4->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s4->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s4->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s4->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s4->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s5">
                <p>Las preguntas siguientes están relacionadas con su jornada de trabajo.</p>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec5 as $s5)
                            <tr>
                                <th scope="row">{{$s5->NUMERO_PREGUNTA}}</th>
                                <td>{{$s5->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s5->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s5->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s5->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s5->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s5->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s5->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s5->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s5->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s5->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s5->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s6">
                <p>Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</p>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec6 as $s6)
                            <tr>
                                <th scope="row">{{$s6->NUMERO_PREGUNTA}}</th>
                                <td>{{$s6->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s6->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s6->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s6->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s6->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s6->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s6->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s6->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s6->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s6->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s6->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s7">
                <p>Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo.(considere los últimos cambios realizados)</p>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec7 as $s7)
                            <tr>
                                <th scope="row">{{$s7->NUMERO_PREGUNTA}}</th>
                                <td>{{$s7->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s7->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s7->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s7->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s7->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s7->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s7->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s7->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s7->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s7->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s7->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s8">
                <p>Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.</p>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec8 as $s8)
                            <tr>
                                <th scope="row">{{$s8->NUMERO_PREGUNTA}}</th>
                                <td>{{$s8->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s8->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s8->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s8->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s8->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s8->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s8->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s8->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s8->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s8->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s8->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s9">
                <p>Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.</p>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec9 as $s9)
                            <tr>
                                <th scope="row">{{$s9->NUMERO_PREGUNTA}}</th>
                                <td>{{$s9->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s9->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s9->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s9->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s9->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s9->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s9->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s9->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s9->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s9->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s9->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s10">
                <p>Las preguntas siguientes se refieren a las relaciones con sus compañeros.</p>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec10 as $s10)
                            <tr>
                                <th scope="row">{{$s10->NUMERO_PREGUNTA}}</th>
                                <td>{{$s10->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s10->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s10->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s10->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s10->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s10->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s10->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s10->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s10->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s10->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s10->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s11">
                <p>Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la
                    estabilidad que le ofrece su trabajo.</p>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec11 as $s11)
                            <tr>
                                <th scope="row">{{$s11->NUMERO_PREGUNTA}}</th>
                                <td>{{$s11->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s11->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s11->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s11->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s11->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s11->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s11->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s11->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s11->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s11->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s11->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s12">
                <p>Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso, hostigamiento, acoso psicológico).</p>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec12 as $s12)
                            <tr>
                                <th scope="row">{{$s12->NUMERO_PREGUNTA}}</th>
                                <td>{{$s12->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s12->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s12->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s12->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s12->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s12->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s12->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s12->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s12->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s12->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s12->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s13">
                <p>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</p>
                <br>
                <p>En mi trabajo debo brindar servicio a clientes o usuarios.</p>
                <input type="checkbox" id="billing-checkbox">
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec13 as $s13)
                            <tr>
                                <th scope="row">{{$s13->NUMERO_PREGUNTA}}</th>
                                <td>{{$s13->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s13->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s13->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s13->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s13->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s13->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s13->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s13->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s13->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s13->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s13->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <fieldset id = "s14">
                <p>Soy jefe de otros trabajadores:</p>
                <br>
                <input type="checkbox" id="billing-checkbox">
                <br>
                <br>
                <p>Las preguntas siguientes están relacionadas con las actitudes de las personas que supervisa.</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col" class="bg-secondary">Siempre</th>
                            <th scope="col" class="bg-secondary">Casi Siempre</th>
                            <th scope="col" class="bg-secondary">Algunas Veces</th>
                            <th scope="col" class="bg-secondary">Casi Nunca</th>
                            <th scope="col" class="bg-secondary">Nunca</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sec14 as $s14)
                            <tr>
                                <th scope="row">{{$s14->NUMERO_PREGUNTA}}</th>
                                <td>{{$s14->PREGUNTA}}</td>
                                <td>
                                    <input type="radio" id="CR{{$s14->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s14->NUMERO_PREGUNTA}}" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s14->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s14->NUMERO_PREGUNTA}}" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s14->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s14->NUMERO_PREGUNTA}}" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s14->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s14->NUMERO_PREGUNTA}}" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" id="CR{{$s14->NUMERO_PREGUNTA}}" class="form-radio" name="CR{{$s14->NUMERO_PREGUNTA}}" value="5" required>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
