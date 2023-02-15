@extends('inicio')

@section('contenido')
{{-- CONTENIDO DE LA TABLA --}}


            <div class="calender-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="calender-inner">
                                <div class="card">
                                    <div class="card-body">
                            <img style="" src="images/header_formulario4x2mh.png"><br><br>
                                        <center>
                                             <div class="card-header">
                                                <h4>REPORTE DE ADMINISTRADORES</h4><hr>
                                             </div>
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-status-wrap">


                                                <table>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Email</th>
                                                        <th>Rol</th>
                                                        <th>Operaciones</th>
                                                    </tr>
                                                    @foreach($user as $u)
                                                    <tr id="resultados">
                                                        <td>{{$u->name}}</td>
                                                        <td>{{$u->email}}</td>
                                                        <td>{{$u->roluser}}</td>
                                                        <td><a href="{{ route ('editaruser', ['id'=>$u->id] )}}">
                                                            <button type="button" class="btn btn-warning btn-sm">Modificar</button>
                                                        </a></td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
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
</div>

@endsection
