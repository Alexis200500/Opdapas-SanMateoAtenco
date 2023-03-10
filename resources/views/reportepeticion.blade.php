@extends('inicio')

@section('contenido')
{{-- CONTENIDO DE LA TABLA --}}


            <div class="calender-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-inner">
                                <div class="card">
                                    <div class="card-body">
                                         <img style="" src="images/header_formulario4x2mh.png"><br><br>
                                        <center>
                                             <div class="card-header">
                                                <h4>REPORTE DE PETICIONES</h4><hr>
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
                                                            <th></th>
                                                                <th>
                                                                    <a href="{{route('peticion')}}">
                                                                        <button type="button" class="btn btn-success btn-sm">Agregar nueva peticion</button>
                                                                    </a>
                                                                </th>

                                                            <th colspan="4">
                                                                <form action="{{route('reportepeticion')}}" method="get">
                                                                    <div class="form-row">
                                                                        <div class="col-sm-10 my-1">
                                                                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                                                                        </div>
                                                                        <div class="col-auto my-1">
                                                                            <input type="submit" class="btn btn-primary" value="Buscar">
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
                                                        <th>Nombre completo</th>
                                                        <th>Tel??fono</th>
                                                        <th>Domicilio (Calle, n??mero, barrio)</th>
                                                        <th>N. Inmueble</th>
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
                                                        <td>{{$u->nombre_completo_peticion}}</td>
                                                        <td>{{$u->telefono_peticion}}</td>
                                                        <td>{{$u->calle_peticion}}, {{$u->numero_domicilio_peticion}}, {{$u->barrio}}</td>
                                                        <td>{{$u->numero_inmueble_peticion}}</td>
                                                        <td>{{$u->status_peticion}}</td>
                                                        <td><a href="{{ route ('editarreporte', ['id_peticion'=>$u->id_peticion] )}}">
                                                            <button type="button" class="btn btn-warning btn-sm">Modificar</button>
                                                        </a></td>

                                                    </tr>
                                                    @endforeach
                                                     @endif
                                                </tbody>
                                                </table>
                                                {{$peticiones->links()}}
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
