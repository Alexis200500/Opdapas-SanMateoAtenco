@extends('inicio')

@section('contenido')

<div class="calender-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="calender-inner">
                    <div class="card">
                        <div class="card-body">
                {{-- <img style="" src="images/header_formulario4x2mh.png"><br><br> --}}
                            <center>
                                 <div class="card-header">
                                    <h4>Reporte de peticiones {{$usuarios->nombre}}</h4><hr>
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

                                    <table class="default">
                                        <thead>
                                            <tr>


                                                <td colspan="6">

                                                    <a href="{{route('peticion_usuario',['id'=>$usuarios->id])}}">
                                                        <button type="button" class="btn btn-success btn-sm">Crear petición</button>
                                                    </a>

                                                </td>
                                            </div>

                                            </tr>
                                        </thead>
                                    </table>
                                    <table>
                                        <tr>
                                            <th># Petición</th>
                                            <th>Fecha de petición</th>
                                            <th>Descripcion </th>
                                            <th>Responsable</th>
                                            <th>Status</th>
                                            <th>Operaciones</th>
                                        </tr>
                                        @if (count($peticiones)<=0)
                                            <tr>
                                                <td colspan="8">No hay resultados</td>
                                            </tr>
                                        @else
                                        @foreach($peticiones as $u)
                                        <tr id="resultados">
                                            <td>{{$u->id_peticion}}</td>
                                            <td>{{$u->fecha_detalle_peticion}}</td>
                                            <td>{{$u->descripcion_detalle_peticion}}</td>
                                            <td>{{$u->nombre_responsable}}</td>
                                            <td>{{$u->status_peticion}}</td>
                                            <td><a href="{{ route ('editarreporte', ['id_peticion'=>$u->id_peticion] )}}">
                                                <button type="button" class="btn btn-warning btn-sm">Modificar</button>
                                            </a></td>

                                        </tr>
                                        @endforeach
                                         @endif
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
