@extends('inicio')

@section('contenido')

<div class="calender-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-inner">
                                <div class="card">
                                    <div class="card-body">

                                        <center>
                                             <div class="card-header">
                                                <h4>Peticiones</h4><hr>
                                             </div>
                                        </center>
                                    </div>
                                    <div class="row">
                                         @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <p>Corrige los siguientes errores:</p>
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="content">
                                            <div class="animated fadeIn">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6">
                                                        <form method="POST" action="{{ route('cambioreporte') }}">
                                                            @csrf
                                                            <div class="card">
                                                                <form>
                                                                <div class="card-body card-block">

                                                                            <input class="form-control" type="hidden" name="id_peticion" value="{{$peticiones->id_peticion}}" required>

                                                                            <input class="form-control" type="hidden" name="id"  value="{{$peticiones->id}}" required>

                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">Nombre / Apellidos</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                            <input class="form-control"  name="nombre_completo_peticion"  value="{{$peticiones->nombre_completo_peticion}}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">Numero telefónico</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                            <input class="form-control"  name="telefono_peticion"  value="{{$peticiones->telefono_peticion}}" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">Barrio.</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                            <select class="form-control"tabindex="1" name="id_barrio" required>
                                                                                <option disabled>Selecciona una opción.</option>
                                                                                @foreach ($barrios as $barrio)
                                                                                @if ($barrio->id_barrio == $peticiones->id_barrio )
                                                                                    <option value={{ $barrio->id_barrio }} selected>{{ $barrio->nombre_barrio}}</option>
                                                                                    @else
                                                                                    <option value={{ $barrio->id_barrio }}>{{ $barrio->nombre_barrio}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label" >Calle</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                                <input class="form-control"  name="calle_peticion" value="{{$peticiones->calle_peticion}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Número de Domicilio</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                <input class="form-control"  name="numero_domicilio_peticion" value="{{$peticiones->numero_domicilio_peticion}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label" >Numero de Inmueble</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                <input class="form-control"  name="numero_inmueble_peticion" value="{{$peticiones->numero_inmueble_peticion}}" required>
                                                                            </div>
                                                                        </div>
                                                                    <div class="form-group">
                                                                            <label class=" form-control-label">Fecha de Solicitud</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                <input type="date" class="form-control" name="fecha_peticion" value="{{$peticiones->fecha_peticion}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Descripción de Solisitud</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <input class="form-control" name="descripcion_detalle_peticion" value="{{$peticiones->descripcion_detalle_peticion}}" required> </input>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group">
                                                                        <label class=" form-control-label">Responsable.</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                            <select class="form-control"tabindex="1" name="id_responsable" required>
                                                                                <option disabled>Selecciona una opción.</option>
                                                                                @foreach ($responsables as $responsables)
                                                                                @if ($responsables->id_responsable == $peticiones->id_responsable )
                                                                                    <option value={{ $peticiones->id_responsable }} selected>{{ $responsables->nombre_responsable}}</option>
                                                                                    @else
                                                                                    <option value={{ $peticiones->id_responsable }}>{{ $responsables->nombre_responsable}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                     <div class="form-group">
                                                                        <label class=" form-control-label">Area.</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                            <select class="form-control"tabindex="1" name="id_area" required>
                                                                                <option disabled>Selecciona una opción.</option>
                                                                                @foreach ($areas as $areas)
                                                                                @if ($areas->id_area == $peticiones->id_area )
                                                                                    <option value={{ $areas->id_area }} selected>{{ $areas->nombre_area}}</option>
                                                                                    @else
                                                                                    <option value={{ $areas->id_area }}>{{ $areas->nombre_area}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6">
                                                                <div class="card">
                                                                    <div class="form-group">
                                                                            <label class=" form-control-label">Fecha de Entrega</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                <input type="date" class="form-control" name="fecha_detalle_peticion"  value="{{$peticiones->fecha_detalle_peticion}}" required>
                                                                            </div>
                                                                        </div>
                                                                     <div class="form-group">
                                                                            <label class=" form-control-label">Prioridad</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    @if($peticiones->prioridad_peticion=='Urgente')
                                                                                    <input type="radio" name="prioridad_peticion" value="Urgente" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">Urgente</label>

                                                                                    <input type="radio" name="prioridad_peticion" value="Moderada" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Moderada</label>
                                                                                    @else
                                                                                    <input type="radio" name="prioridad_peticion" value="Urgente" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">Urgente</label>

                                                                                    <input type="radio" name="prioridad_peticion" value="Moderada" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Moderada</label>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Estado</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    @if($peticiones->status_peticion=='En Espera')
                                                                                    <input type="radio" name="status_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="status_peticion" value="Autorizado" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Autorizado</label>
                                                                                     @else
                                                                                     <input type="radio" name="status_peticion" value>
                                                                                     <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="status_peticion" value="Autorizado" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Autorizado</label>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group">
                                                                            <label class=" form-control-label">Levantamiento de Informacion</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    @if($peticiones->status_info_peticion=='En Espera')
                                                                                    <input type="radio" name="status_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="status_info_peticion" value="Listo" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @else
                                                                                    <input type="radio" name="status_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="status_info_peticion" value="Listo" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Desarrollo</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    @if($peticiones->desarrollo_info_peticion=='En Espera')
                                                                                    <input type="radio" name="desarrollo_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="desarrollo_info_peticion" value="Listo" requirequired checkedred>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @else
                                                                                    <input type="radio" name="desarrollo_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="desarrollo_info_peticion" value="Listo" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Elavoracion de Reporte</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    @if($peticiones->reporte_info_peticion=='En Espera')
                                                                                    <input type="radio" name="reporte_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="reporte_info_peticion" value="Listo" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @else
                                                                                    <input type="radio" name="reporte_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="reporte_info_peticion" value="Listo" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Validacion</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    @if($peticiones->validacion_info_peticion=='En Espera')
                                                                                    <input type="radio" name="validacion_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="validacion_info_peticion" value="Listo" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @else
                                                                                    <input type="radio" name="validacion_info_peticion" value="En Espera" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>

                                                                                    <input type="radio" name="validacion_info_peticion" value="Listo" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Avance</label>
                                                                            <div class="input-group">
                                                                               <div class="form-check form-check-inline">
                                                                                   @if($peticiones->avance_peticion=='En Espera')
                                                                                    <input type="radio" name="avance_peticion" value="LEVANTAMIENTO DE INFORMACIÓN" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">LEVANTAMIENTO DE INFORMACIÓN</label>

                                                                                    <input type="radio" name="avance_peticion" value="DESARROLLO" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">DESARROLLO</label>

                                                                                    <input type="radio" name="avance_peticion" value="ELABORACIÓN DE REPORTE" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio3">ELABORACIÓN DE REPORTE</label>

                                                                                    <input type="radio" name="avance_peticion" value="VALIDACIÓN" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio3">VALIDACIÓN</label>
                                                                                    @else
                                                                                     <input type="radio" name="avance_peticion" value="LEVANTAMIENTO DE INFORMACIÓN" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">LEVANTAMIENTO DE INFORMACIÓN</label>

                                                                                    <input type="radio" name="avance_peticion" value="DESARROLLO" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">DESARROLLO</label>

                                                                                    <input type="radio" name="avance_peticion" value="ELABORACIÓN DE REPORTE" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio3">ELABORACIÓN DE REPORTE</label>

                                                                                    <input type="radio" name="avance_peticion" value="VALIDACIÓN" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio3">VALIDACIÓN</label>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Respuesta de Oficio</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <input class="form-control" name="respuesta_peticion" value="{{$peticiones->respuesta_peticion}}" required> </input>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Ovservaciones</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <input class="form-control" name="ovservacion_peticion" value="{{$peticiones->ovservacion_peticion}}" required> </input>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Tiempo de Respuesta</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <input class="form-control" name="respuest_peticion" value="{{$peticiones->respuest_peticion}}" required> </input>
                                                                            </div>
                                                                        </div>
                                                                        <center>
                                                                            <button type="submit" class="btn btn-primary btn-md btn-block">Enviar</button>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
