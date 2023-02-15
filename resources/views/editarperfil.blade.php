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
                                                <h4>Editar mi perfil</h4><hr>
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
                                                        <form method="POST" enctype="multipart/form-data" action="{{ route('cambioperfil') }}">
                                                            @csrf
                                                            <div class="card">
                                                                <form>
                                                                <div class="card-body card-block">



                                                                            <input  type="hidden"    name="id" value="{{$datos_usuario->id}}" required>

                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">Nombre</label>
                                                                        <div class="input-group">
                                                                             <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                            <input class="form-control" name="name" value="{{$datos_usuario->name}}" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class=" form-control-label">E-mail</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                            <input class="form-control" name="email" value="{{$datos_usuario->email}}" required>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6">
                                                                <div class="card">



                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                        <label class=" form-control-label">Rol</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                            <input class="form-control" name="roluser" value="{{$datos_usuario->roluser}}" required>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                    <label class=" form-control-label">Imagen </label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-image"></i></div>
                                                                        <input type="file" class="form-control" name="foto_user" required>
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
