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
                                    <h4>Peticiones</h4>
                                    <hr>
                                </div>
                            </center>
                        </div>
                        <div class="row">
                        </div>
                        <div class="card-body">
                            <div class="content">
                                <div class="animated fadeIn">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <form method="POST" action="{{route('guardarpeticion_usuario')}}">
                                                @csrf
                                                <div class="card">
                                                    <form>
                                                        <div class="card-body card-block">

                                                            <div class="form-group">
                                                                <label class=" form-control-label"># Usuario</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                            class="fa fa-user"></i></div>

                                                                    <input class="form-control" name="id"
                                                                        value="{{$usuarios->id}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Nombre</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                            class="fa fa-user"></i></div>

                                                                    <input class="form-control" name="nombre_completo_peticion"
                                                                        value="{{$usuarios->nombre}}">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                        <label class=" form-control-label">Numero telef??nico</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                            <input class="form-control" value="{{$usuarios->celular}}" name="telefono_peticion" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">Barrio.</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                                <select class="form-control" tabindex="1" name="id_barrio" required>
                                                                                    <option disabled>Selecciona una opci??n.</option>
                                                                                    @foreach ($barrios as $barrio)
                                                                                    <option value={{$barrio->id_barrio}}>{{$barrio->nombre_barrio}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label" >Calle</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                                <input class="form-control" value="{{$usuarios->calle}}" name="calle_peticion" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">N??mero de Domicilio</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                <input class="form-control" value="{{$usuarios->num_dom}}" name="numero_domicilio_peticion" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label" >Numero de Inmueble</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                <input class="form-control"  value="{{$usuarios->num_inmueble}}" name="numero_inmueble_peticion" required>
                                                                            </div>
                                                                        </div>
                                                                    <div class="form-group">
                                                                            <label class=" form-control-label">Fecha de Solicitud</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                <input type="date" class="form-control" name="fecha_peticion" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Descripci??n de Solisitud</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <textarea class="form-control" name="descripcion_detalle_peticion" required> </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <label class=" form-control-label">Responsable</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                                <select class="form-control" tabindex="1" name="id_responsable" required>
                                                                                    <option disabled>Selecciona una opci??n.</option>
                                                                                    @foreach ($responsables as $responsables)
                                                                                    <option value={{$responsables->id_responsable}}>{{$responsables->nombre_responsable}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <label class=" form-control-label">Area</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                                <select class="form-control" tabindex="1" name="id_area" required>
                                                                                    <option disabled>Selecciona una opci??n.</option>
                                                                                    @foreach ($areas as $areas)
                                                                                    <option value={{$areas->id_area}}>{{$areas->nombre_area}}</option>
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
                                                                                <input type="date" class="form-control" name="fecha_detalle_peticion" required>
                                                                            </div>
                                                                        </div>
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Prioridad</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" name="prioridad_peticion" value="Urgente" required>
                                                                                    <label class="form-check-label" for="inlineRadio1">Urgente</label>


                                                                                    <input type="radio" name="prioridad_peticion" value="Moderada" required>
                                                                                    <label class="form-check-label" for="inlineRadio2">Moderada</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Estado</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" name="status_peticion" value="En Espera" required>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>


                                                                                    <input type="radio" name="status_peticion" value="Autorizado" required>
                                                                                    <label class="form-check-label" for="inlineRadio2">Autorizado</label>

                                                                                    <input type="radio" name="status_peticion" value="Entegrado" required>
                                                                                    <label class="form-check-label" for="inlineRadio3">Entregado</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Levantamiento de Informacion</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" name="status_info_peticion" value="En Espera" required>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>


                                                                                    <input type="radio" name="status_info_peticion" value="Listo" required>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Desarrollo</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" name="desarrollo_info_peticion" value="En Espera" required>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>


                                                                                    <input type="radio" name="desarrollo_info_peticion" value="Listo" required>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Elavoracion de Reporte</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" name="reporte_info_peticion" value="En Espera" required>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>


                                                                                    <input type="radio" name="reporte_info_peticion" value="Listo" required>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Validacion</label>
                                                                            <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" name="validacion_info_peticion" value="En Espera" required>
                                                                                    <label class="form-check-label" for="inlineRadio1">En espera</label>


                                                                                    <input type="radio" name="validacion_info_peticion" value="Listo" required>
                                                                                    <label class="form-check-label" for="inlineRadio2">Listo</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Avance</label>
                                                                            <div class="input-group">
                                                                               <div class="form-check form-check-inline">
                                                                                    <input type="radio" name="avance_peticion" value="LEVANTAMIENTO DE INFORMACI??N" required>
                                                                                    <label class="form-check-label" for="inlineRadio1">LEVANTAMIENTO DE INFORMACI??N</label>


                                                                                    <input type="radio" name="avance_peticion" value="DESARROLLO" required>
                                                                                    <label class="form-check-label" for="inlineRadio2">DESARROLLO</label>

                                                                                    <input type="radio" name="avance_peticion" value="ELABORACI??N DE REPORTE" required>
                                                                                    <label class="form-check-label" for="inlineRadio3">ELABORACI??N DE REPORTE</label>

                                                                                    <input type="radio" name="avance_peticion" value="VALIDACI??N" required>
                                                                                    <label class="form-check-label" for="inlineRadio3">VALIDACI??N</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Respuesta de Oficio</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <textarea class="form-control" name="respuesta_peticion" required> </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Ovservaciones</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <textarea class="form-control" name="ovservacion_peticion" required> </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class=" form-control-label">Tiempo de Respuesta</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                                <textarea class="form-control" name="respuest_peticion" required> </textarea>
                                                                            </div>
                                                                        </div>
                                                        <center>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-md btn-block">Enviar</button>
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
