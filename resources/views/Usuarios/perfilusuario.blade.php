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
                                                <h4>Perfil Usuario</h4>
                                             </div>
                                        </center>
                                        </div>
                                        <div class="profile">
                                            <a href="#">
                                                 <img src="{{ asset('archivos/'.$usuarios->image) }}" alt="" width="100" height="100" />
                                            </a>
                                        </div>
                                    </div>

                    <div class="row">

                    </div>
                    <div class="card-body">
                        <div class="content">
                            <div class="animated fadeIn">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                            @csrf
                                            <div class="card">
                                                <div class="card-body card-block">
                                                <div class="form-group">
                                                        <label class=" form-control-label">ID</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                            <label class="form-control">{{$usuarios->id}}</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class=" form-control-label">Nombre (s)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                           <label class="form-control">{{$usuarios->nombre}}</label>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class=" form-control-label">Fecha de Nacimiento</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            <label class="form-control">{{$usuarios->fecha_n}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Edad</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                            <label class="form-control">{{$usuarios->edad}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Sexo</label>
                                                         <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                            <label class="form-control">{{$usuarios->sexo}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Curp</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa  fa-credit-card"></i></div>
                                                            <label class="form-control">{{$usuarios->curp}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">RFC</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa  fa-credit-card"></i></div>
                                                            <label class="form-control">{{$usuarios->rfc}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class=" form-control-label">Google</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                 <label class="form-control">{{$usuarios->google}}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="form-group">
                                                        <label class=" form-control-label">Correo electronico</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                            <label class="form-control">{{$usuarios->email}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Telefono de casa</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                            <label class="form-control">{{$usuarios->num_casa}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Telefono celular</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                            <label class="form-control">{{$usuarios->celular}}</label>
                                                        </div>
                                                    </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label" >Calle</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                <label class="form-control">{{$usuarios->calle}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Barrio.</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                <label class="form-control">{{$usuarios->barrio}}</label>
                                                            </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label class=" form-control-label">Facebook</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                                            <label class="form-control"><a href="{{$usuarios->facebook}}" class="link-info">{{$usuarios->facebook}}</a></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class=" form-control-label">Comprobante de Domicilio&nbsp;&nbsp;<i class="fa fa-file"></i></label>
                                                            <div class="input-group">

                                                            <div class="profile">
                                                                <a href="{{ asset('archivos/'.$usuarios->comdom) }}">
                                                                    <img src="{{ asset('archivos/'.$usuarios->comdom) }}" alt="" width="100" height="100" />
                                                                </a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xs-6 col-sm-4">
                                                <div class="card">

                                                    <div class="card-body">


                                                        <div class="form-group">
                                                            <label class=" form-control-label">Número de Domicilio</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                <label class="form-control">{{$usuarios->num_dom}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label" >Numero de Inmueble</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                                <label class="form-control">{{$usuarios->num_inmueble}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Status</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                                <label class="form-control">{{$usuarios->status}}</label>
                                                            </div>
                                                            </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Estado civil</label>
                                                           <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                                <label class="form-control">{{$usuarios->estado_civil}}</label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Tipo de Inmueble</label>
                                                           <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                                <label class="form-control">{{$usuarios->tipo_inm}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Observación</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                 <label class="form-control">{{$usuarios->observacion}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Ine&nbsp;&nbsp;<i class="fa  fa-credit-card"></i></label>
                                                            <div class="input-group">

                                                            <div class="profile">
                                                                <a href="{{ asset('archivos/'.$usuarios->ine) }}">
                                                                    <img src="{{ asset('archivos/'.$usuarios->ine) }}" alt="" width="100" height="100" />
                                                                </a>
                                                                </div>
                                                            </div>
                                                        </div>


                                        <div  align="right">
                                            <a href="{{ route ('editarusuario', ['id'=>$usuarios->id] )}}" style="color:#000000"  align="right">
                                                 <button type="button" class="btn btn-success btn-sm">Modificar</button>
                                            </a>
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
