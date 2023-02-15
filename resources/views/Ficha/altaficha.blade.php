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
                                        <h4>Registro de Fichas</h4>
                                        <hr>
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
                                                <form method="POST"
                                                      enctype="multipart/form-data"
                                                      action="{{ route('guardaficha') }}">
                                                    @csrf
                                                    <div class="card">
                                                        <div class="card-body card-block">

                                                            <div class="form-group">
                                                                <label class=" form-control-label">Nombre (s)</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-user"></i></div>
                                                                    <input class="form-control"
                                                                           value="{{$usuarios->nombre}}"
                                                                           name="nombre_completo_ficha"
                                                                           required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class=" form-control-label">Fecha de
                                                                    Nacimiento</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-calendar"></i></div>
                                                                    <input type="date"
                                                                            value="{{$usuarios->fecha_n}}"
                                                                           class="form-control"
                                                                           name="fecha_ficha"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Edad</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                           value="{{$usuarios->edad}}"
                                                                           name="edad_ficha"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                        <label class=" form-control-label">Sexo</label>
                                                        <div class="input-group">
                                                            <div class="form-check form-check-inline">
                                                                @if($usuarios->sexo=='Masculino')
                                                                <input type="radio" name="sexo_ficha" value="Masculino" required checked="">
                                                                <label class="form-check-label" for="inlineRadio1" >Masculino</label>

                                                                <input type="radio" name="sexo_ficha" value="Femenino" required>
                                                                <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                                @else
                                                                <input type="radio" name="sexo_ficha" value="Masculino" required>
                                                                <label class="form-check-label" for="inlineRadio1" >Masculino</label>

                                                                <input type="radio" name="sexo_ficha" value="Femenino" required checked="">
                                                                <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Correo
                                                                    electronico</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-user"></i></div>
                                                                    <input type="email"
                                                                           class="form-control"
                                                                           value="{{$usuarios->email}}"
                                                                           name="email_ficha"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Telefono de casa</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                          value="{{$usuarios->num_casa}}"
                                                                           name="num_casa_ficha"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Telefono celular</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                           value="{{$usuarios->celular}}"
                                                                           name="celular_ficha"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Calle</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-road"></i></div>
                                                                    <input class="form-control"
                                                                           value="{{$usuarios->calle}}"
                                                                           name="calle_ficha"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Barrio.</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-map-signs"></i></div>
                                                                    <select class="form-control"
                                                                            tabindex="1"
                                                                            name="id_barrio"
                                                                            required>
                                                                        <option disabled>Selecciona una opción.</option>
                                                                        @foreach ($barrios as $barrio)
                                                                        @if ($barrio->id_barrio == $usuarios->id_barrio )
                                                                            <option value={{ $barrio->id_barrio }} selected>{{ $barrio->nombre_barrio}}</option>

                                                                            @else
                                                                            <option value={{ $barrio->id_barrio }}>{{ $barrio->nombre_barrio}}</option>
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
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                                <label class=" form-control-label">Número de
                                                                    Domicilio</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                           value="{{$usuarios->num_dom}}"
                                                                           name="numero_domicilio_ficha"
                                                                           required>
                                                                </div>
                                                            </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Numero de Inmueble</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i
                                                                       class="fa fa-hashtag"></i></div>
                                                                <input class="form-control"
                                                                       value="{{$usuarios->num_inmueble}}"
                                                                       name="numero_inmueble_ficha"
                                                                       required>
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label class=" form-control-label">Clave Usuario</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i
                                                                       class="fa fa-hashtag"></i></div>
                                                                <input class="form-control"
                                                                      value="{{$usuarios->id}}"
                                                                       name="id"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Status</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i
                                                                       class="fa fa-map-user"></i></div>
                                                                <select class="form-control"
                                                                        tabindex="1"
                                                                        name="status_ficha"
                                                                        required>
                                                                    <option disabled>Selecciona una opción.</option>
                                                                    <option value="Activo">Activo</option>
                                                                    <option value="Inactivo">Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class=" form-control-label">Curp</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i>
                                                        </div>
                                                        <input class="form-control"
                                                               value="{{$usuarios->curp}}"
                                                               name="curp_ficha"
                                                               required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class=" form-control-label">Google</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-google"></i>
                                                        </div>
                                                        <input class="form-control"
                                                               value="{{$usuarios->google}}"
                                                               name="maps_ficha"
                                                               required>

                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class=" form-control-label">Ine </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-image"></i>
                                                        </div>
                                                        <input type="file"  class="form-control" name="ine_ficha" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">Comprobante de Domicilio </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-image"></i>
                                                        </div>
                                                        <input type="file"
                                                               class="form-control"
                                                               name="comprobante_ficha"
                                                               required>
                                                    </div>
                                                </div>

                                                <center>
                                                    <button type="submit"
                                                            class="btn btn-primary btn-md btn-block">Enviar</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
