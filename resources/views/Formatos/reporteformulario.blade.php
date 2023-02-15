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
                                                <h4>LIBRO DE GOBIERNO</h4><hr>
                                            </div>
                                        </center>
                                </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-status-wrap">
                                                {{--  <h4>Products List</h4><div class="add-product"><a href="product-edit.html">Add Product</a></div> --}}
                                                <table class="default">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>
                                                                <a href="{{route('formulario_de_solicitud')}}">
                                                                    <button type="button" class="btn btn-success btn-sm">Agregar nueva solicitud</button>
                                                                </a>
                                                            </th>
                                                            <th colspan="4">
                                                                <form action="{{route('reporteformulario')}}" method="get">
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
                                                        <th>Folio</th>
                                                        <th>Nombre completo</th>
                                                        <th>Tipo de solicitud</th>
                                                        <th>Fecha de solicitud</th>
                                                       
                                                        <th>Activo</th>
                                                        <th>Status</th>
                                                        <th>Archivo</th>
                                                    </tr>
                                                    
                                                    @if(count($solisitud)<=0)
                                                    <tr>
                                                        <td colspan="8">No hay resultados</td>
                                                    </tr>
                                                    @else
                                                        @foreach($solisitud as $u)
                                                        <tr id="resultados">
                                                            <td>{{$u->id}}</td>
                                                            <td>{{$u->nombre_solicitud}}</td>
                                                            <td>{{$u->motivo_solicitud}}</td>
                                                            <td>{{$u->fecha_solicitud}}</td>
                                                            
                                                            <td>
                                                                @if($u->activo == "No")
                                                                    <a href="{{route('activar',['id'=>$u->id])}}">
                                                                        <button type="button" class="btn btn-success">Activar</button>
                                                                    </a>
                                                                @else
                                                                    <span>Activo</span>
                                                                @endif
                                                            </td>
                                                            <td>

                                                                @if($u->activo == "Si")
                                                                
                                                                    <span style="display: inline-block;min-width: 10px; padding: 3px 7px;font-size: 12px;font-weight: 700;line-height: 1; color: #fff;text-align: center; white-space: nowrap;vertical-align: middle; background-color: green;border-radius: 10px;">Atendido</span>
                                                                
                                                                @else
                                                                    
                                                                    @if($u->dias == 5 || $u->dias == 4 )
                                                                        <span style="display: inline-block;min-width: 10px; padding: 3px 7px;font-size: 12px;font-weight: 700;line-height: 1; color: #fff;text-align: center; white-space: nowrap;vertical-align: middle; background-color: blue;border-radius: 10px;">Solicitado</span>
                                                                    
                                                                    @else
                                                                        @if ($u->dias == 3 || $u->dias == 2)
                                                                            <span style="display: inline-block;min-width: 10px; padding: 3px 7px;font-size: 12px;font-weight: 700;line-height: 1; color: #000;text-align: center; white-space: nowrap;vertical-align: middle; background-color: yellow;border-radius: 10px;">En espera</span>
                                                                        @else
                                                                            <span style="display: inline-block;min-width: 10px; padding: 3px 7px;font-size: 12px;font-weight: 700;line-height: 1; color: #fff;text-align: center; white-space: nowrap;vertical-align: middle; background-color: red;border-radius: 10px;">Sin atender</span>
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            </td>
                                                            <td>
                                                                
                                                                <a href="{{ route ('formatopdf', ['id'=>$u->id] )}}" >                                                                
                                                                    <img src="{{asset('archivos/pdf.png')}}" alt="Descargar pdf" style="max-width: 50%;
                                                                    max-height: 50%;">                                                               
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                            {{$solisitud->links()}}
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