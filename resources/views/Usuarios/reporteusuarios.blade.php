@extends('inicio')

@section('contenido')
{{-- CONTENIDO DE LA TABLA --}}


            <div class="calender-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-inner">
                                <div class="card-body">
                                     <img style="" src="images/header_formulario4x2mh.png"><br><br>
                                        <center>
                                             <div class="card-header">
                                                <h4>REPORTE DE USUARIOS</h4><hr>
                                             </div>
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-status-wrap">
                                            {{--  <h4>Products List</h4>
                                                <div class="add-product">
                                                    <a href="product-edit.html">Add Product</a>
                                                </div> --}}

                                                <table class="default"  style="width: 1000px; " >
                                                    <thead>
                                                        <tr>
                                                                <th>
                                                                    <a href="{{route('altausuario')}}">
                                                                         <button type="button" class="btn btn-labeled btn-success">
                                                                            <span class="btn-label"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;</span>Agregar Usuario</button>
                                                                    </a>
                                                                </th>
                                                            <th>
                                                                    <a href="{{route('subir')}}">
                                                                        <button type="button" class="btn btn-labeled btn-success">
                                                                            <span class="btn-label"><i class="fa fa-arrow-up" ></i>&nbsp;&nbsp;</span>Importar Excel</button>
                                                                    </a>
                                                            </th>
                                                            <th>
                                                                    <a href="{{route('bajar')}}">
                                                                        <button type="button" class="btn btn-labeled btn-success">
                                                                            <span class="btn-label"><i class="fa fa-arrow-down" ></i>&nbsp;&nbsp;</span>Exportar Excel</button>
                                                                    </a>
                                                            </th>
                                                            <th colspan="4">
                                                                <form action="{{route('reporteusuarios')}}" method="get">
                                                                    <div class="form-row">
                                                                        <div class="col-sm-8 my-1">
                                                                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                                                                        </div>
                                                                        <div class="col-auto my-1">
                                                                            <input type="submit" class="btn btn-labeled btn-primary" value="Buscar">
                                                                        </div>


                                                                    </div>
                                                                </form>
                                                            </div>

                                                            </th>

                                                        </tr>
                                                    </thead>
                                                </table>
                                                <table>
                                                    <tr>
                                                        <th>Foto</th>
                                                        <th>Nombre completo</th>
                                                        <th>Teléfono</th>
                                                        <th>Domicilio (Calle, número)</th>
                                                        <th>N. Inmueble</th>
                                                        <th>Status</th>
                                                        <th>Operaciones</th>
                                                    </tr>
                                                    @if (count($usuarios)<=0)
                                                        <tr>
                                                            <td colspan="8">No hay resultados</td>
                                                        </tr>
                                                    @else
                                                    @foreach($usuarios as $u)
                                                    <tr id="resultados">
                                                        <td><img src="archivos/{{$u->image}}" alt="" width="100" height="100" /></td>
                                                        <td>{{$u->nombre}}</td>
                                                        <td>{{$u->celular}}</td>
                                                        <td>{{$u->calle}}, {{$u->num_dom}}</td>
                                                        <td>{{$u->num_inmueble}}</td>
                                                        <td>{{$u->status}}</td>
                                                        {{-- <td>
                                                        <a href="{{ route ('editarusuario', ['id'=>$u->id] )}}">
                                                            <button type="button" class="btn btn-warning btn-sm">Modificar</button>
                                                        </a>
                                                        @if($u->deleted_at)
                                                        <a href="{{route('activar_usuario',['id'=>$u->id])}}">
                                                            <button type="button" class="btn btn-labeled btn-success">Activar</button>
                                                        </a>

                                                        @else
                                                        <a href="{{route('desactivar_usuario',['id'=>$u->id])}}">
                                                                    <button type="button" class="btn btn-danger btn-sm">Desactivar</button>
                                                        </a>
                                                        @endif
                                                        </td> --}}

                                                    <td>
                                                            <div class = "btn-group">
                                                            <button style="background-color:#337ab7;" type = "button" class = "btn btn-info">Opciones</button>

                                                            <button style="background-color:#337ab7;" type = "button" class = "btn btn-info dropdown-toggle" data-toggle = "dropdown">
                                                                <span class = "caret"></span>
                                                            </button>

                                                            <ul class = "dropdown-menu" role = "menu" >
                                                                <li style="background-color:#ffca2c;"  ><a href="{{ route ('editarusuario', ['id'=>$u->id] )}}" style="color:#000000">Modificar</a></li>
                                                                 @if($u->deleted_at)
                                                                <li style="background-color:#198754;"><a href="{{route('activar_usuario',['id'=>$u->id])}}" style="color:#000000">Activar</a></li>
                                                                @else
                                                                <li style="background-color:#dc3545;"><a href="{{route('desactivar_usuario',['id'=>$u->id])}}" style="color:#000000">Desactivar</a></li>
                                                                @endif
                                                                <li style="background-color:#5cb85c;"><a href="{{url('/reportepeticion_usuario',['id'=>$u->id])}}" style="color:#000000">Peticiones</a></li>

                                                                <li style="background-color:#299fce;"><a href="{{url('/perfilusuario',['id'=>$u->id])}}" style="color:#000000">Ver Perfil</a></li>

                                                                <li style="background-color:#f115e6;"><a href="{{url('/altaficha',['id'=>$u->id])}}" style="color:#000000">Ficha Usuario</a></li>
                                                                
                                                                <li style="background-color:#FF5733;"><a href="{{url('/fichapdf',['id'=>$u->id])}}" style="color:#000000">Imprimir Ficha Usuario</a></li>
                                                                {{-- consulta por id_peticiones --}}

                                                            </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                     @endif
                                                </tbody>
                                                </table>
                                                {{$usuarios->withQueryString()->links() }}
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


