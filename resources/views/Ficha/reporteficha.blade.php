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
                                                <h4>REPORTE DE FICHAS</h4><hr>
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
                                                                {{-- <th>
                                                                    <a href="{{route('altaficha')}}">
                                                                         <button type="button" class="btn btn-labeled btn-success">
                                                                            <span class="btn-label"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;</span>Agergar Ficha</button>
                                                                    </a>
                                                                </th> --}}

                                                            <th colspan="4">
                                                                <form action="{{route('reporteficha')}}" method="get">
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
                                                        <th>Clave</th>
                                                        <th>Nombre completo</th>
                                                        <th>Fecha</th>
                                                        <th>Barrio</th>
                                                        <th>Status</th>
                                                        <th>Operaciones</th>
                                                    </tr>
                                                    @if (count($fichas)<=0)
                                                        <tr>
                                                            <td colspan="8">No hay resultados</td>
                                                        </tr>
                                                    @else
                                                    @foreach($fichas as $u)
                                                    <tr id="resultados">
                                                        {{-- <td><img src="archivos/{{$u->image}}" alt="" width="100" height="100" /></td> --}}
                                                        <td>{{$u->id_ficha}}</td>
                                                        <td>{{$u->nombre_completo_ficha}}</td>
                                                        <td>{{$u->fecha_ficha}}</td>
                                                        <td>{{$u->barrio}}</td>
                                                        <td>{{$u->status_ficha}}</td>

                                                    <td>
                                                            <div class = "btn-group">
                                                            <button style="background-color:#337ab7;" type = "button" class = "btn btn-info">Opciones</button>

                                                            <button style="background-color:#337ab7;" type = "button" class = "btn btn-info dropdown-toggle" data-toggle = "dropdown">
                                                                <span class = "caret"></span>
                                                            </button>

                                                            <ul class = "dropdown-menu" role = "menu" >
                                                                 <li style="background-color:#FF5733;"><a href="{{url('/fichapdf',['id'=>$u->id_ficha])}}" style="color:#000000">Imprimir Ficha Usuario</a></li>

                                                            </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                     @endif
                                                </tbody>
                                                </table>
                                                {{$fichas->withQueryString()->links() }}
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


