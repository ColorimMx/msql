@extends('layouts.app')
@section('title', 'Cuestionario 2')
@section('content')
    <div class="container">

        <section id="inicio">
            <h2 class="text-center">GUIA DE REFERENCIA 2</h2>
            <br>
            <h2 class="text-center">CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS DE TRABAJO</h2>
            <br>
            <br>
        </section>
        <form class="was-validated" name="myForm">
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
                <p>Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.</p>
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
                <p>Las preguntas siguientes están relacionadas con el tiempo destinado a su trabajo y sus responsabilidades familiares.</p>
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
                <p>Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.</p>
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
                <p>Las preguntas siguientes se refieren s lsd relaciones con sus compañeros de trabajo y su jefe.</p>
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
            <p>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</p>
            <br>
            <br>
            <p>En mi trabajo debo brindar servicio a clientes o usuarios:</p>
            <select id="S7S" name="S7S"  class="custom-select" required>
                <option value="">Seleccione una respuesta</option>
                <option value="0">No</option>
                <option value="1">Si</option>
            </select>
            <fieldset id = "s7">

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
                <p>Soy jefe de otros trabajadores:</p>
                <select id="S8J" name="S8J"  class="custom-select" required>
                    <option value="">Seleccione una respuesta</option>
                    <option value="0">No</option>
                    <option value="1">Si</option>
                </select>
                <br>
                <br>
                <p>Las siguientes preguntas estan relacionadas con las actitudes de los trabajadores que supervisa.</p>
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
        </form>
        <script type="text/javascript">
            function disableField() {
                var a = document.forms["myForm"]["S7S"].value;

                if (a === "0") {
                    document.getElementById("s7").disabled = false;

                } else if (a === "1") {
                    document.getElementById("s7").disabled = true;
                } else {
                    document.getElementById("s7").disabled = true;
                }
            }
            document.getElementById("s7").disabled = true;
        </script>
    </div>
@endsection
