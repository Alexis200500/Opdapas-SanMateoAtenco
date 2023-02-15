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
                                                <h4>BUSQUEDA POR BARRIOS</h4><hr>
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
                                                                    <form action="{{'buscar_barrio'}}" method="GET">
                                                                        Barrio:
                                                                        <select class="form-control" name="barr">
                                                                            @foreach ($barrios as $barrio)
                                                                            <option value={{$barrio->id_barrio}}>{{$barrio->nombre_barrio}}</option>
                                                                            @endforeach
                                                                        </select>


                                                                        <br>
                                                                        <input type="submit" class="btn btn-primary" value="Buscar">
                                                                    </form>



                                                                </th>



                                                        </tr>
                                                    </thead>
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
