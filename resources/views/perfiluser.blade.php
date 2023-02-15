@extends('inicio')

@section('contenido')

<div class="calender-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="calender-inner">
                                <div class="card">
                                    <div class="card-body">

                                        <center>
                                             <div class="card-header">
                                                <h4>Perfil Usuario</h4><hr>
                                             </div>
                                        </center>
                                    </div>
                                    <div class="profile">
                                            <a href="#">
                                                 <img src="{{ asset('archivos/'.$datos_usuario->foto_user) }}" alt="" width="100" height="100" />
                                            </a>
                                        </div>
                                    <div class="row">

                                    </div>
                                    <div class="card-body">
                                        <div class="content">
                                            <div class="animated fadeIn">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6">
                                                        <form method="POST" enctype="multipart/form-data" action="{{ route('cambiouser') }}">
                                                            @csrf
                                                            <div class="card">
                                                                <form>
                                                                <div class="card-body card-block">

                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">Clave Usuario</label>
                                                                        <div class="input-group">
                                                                             <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                            <label class="form-control">{{$datos_usuario->id}}</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">Nombre</label>
                                                                        <div class="input-group">
                                                                             <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                            <label class="form-control">{{$datos_usuario->name}}</label>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6">
                                                                <div class="card">

                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">E-mail</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                             <label class="form-control">{{$datos_usuario->email}}</label>
                                                                    </div>
                                                                </div>

                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                        <label class=" form-control-label">Rol</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                            <label class="form-control">{{$datos_usuario->roluser}}</label>
                                                                        </div>
                                                                    </div>
                                                                    </div>



                                                                            <td><a href="{{ route ('editarperfil' )}}">
                                                                                <button type="button" class="btn btn-warning btn-sm">Modificar</button>
                                                                            </a></td>

                                                                        </tr>
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
