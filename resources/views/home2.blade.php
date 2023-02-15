@extends('inicio')

@section('contenido')
{{-- CONTENIDO DE LA TABLA --}}


<div class="calender-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                 <div class="card-body">
                            <img style="" src="images/header_formulario4x2mh.png"><br><br>

                            <center>
                                <div class="card-header">
                                    <h4>BUSQUEDA POR BARRIOS</h4>
                                    <hr>
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
                                                        <select class="form-control mb-10" name="barr">
                                                            @foreach ($barrios as $barrio)
                                                            <option value={{$barrio->id_barrio}}>
                                                                {{$barrio->nombre_barrio}}</option>
                                                            @endforeach
                                                        </select>


                                                        <br>
                                                        <input type="submit" class="btn btn-primary" value="Buscar">
                                                    </form>



                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <table>
                                         <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <td colspan="4"><b>Usuarios existentes: {{$contar}}</b> </td>
                                            </tr>
                                        <tr>
                                            <th>Nombre completo</th>
                                            <th>Teléfono</th>
                                            <th>Domicilio (Calle, número, barrio)</th>
                                            <th>N. Inmueble</th>
                                            <th>Status</th>
                                        </tr>
                                        @if (count($usuarios)<=0) <tr>
                                            <td colspan="8">No hay resultados</td>
                                            </tr>
                                            @else
                                            @foreach($usuarios as $u)
                                            <tr id="resultados">
                                                <td>{{$u->nombre}}</td>
                                                <td>{{$u->celular}}</td>
                                                <td>{{$u->calle}}, {{$u->num_dom}}, {{$u->nombre_barrio}}</td>
                                                <td>{{$u->num_inmueble}}</td>
                                                <td>{{$u->status}}</td>
                                            </tr>
                                            @endforeach
                                            @endif

                                            </tbody>
                                    </table>
                                    {{ $usuarios->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                         <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Pie charts are very popular for showing a compact overview of a
    composition or comparison. While they can be harder to read than
    column charts, they remain a popular choice for small datasets.
  </p>
</figure>

<script type="text/javascript">

    var barrios = <?php echo json_encode($barrios)?>;
    var contar = <?php echo json_encode($contar)?>;

    Highcharts.chart('container', {

        title: {
            text: 'Barrios'
        },
        xAxis: {
            categories: ['Acantto Torre ','Alborada','Alborada 2','Alborada 3','Alborada 4','Alvaro Obregon','Araucaria 1','Araucaria 2','Barrio De Guadalupe','Barrio De La Concepcion','Barrio De La Magdalena','Barrio De San Francisco','Barrio De San Isidro','Barrio De San Juan','Barrio De San Lucas','Barrio De San Miguel','Barrio De San Nicolas','BARRIO DE SAN PEDRO','Barrio De Santa Maria','Barrio De Santiago',,'Bosques Botuna','Cantera Mil 3','Casa Magna Privada 1','Chapultec I','Cipreses II','Colonia Alvaro Obregon','Colonia Buenavista','Colonia Reforma', 'Condominio Concepto 1010','Condominio Horizontal Habitacional Resi','Condominio Horizontal Las Herencias','Condominio Horizontal Primavera','Conjunto Vitalia I','Conjunto Vitalia II','Diamante','Don Samuel','El Dorado II','El Secreto','Emiliano Zapata','Esmeralda 1',,'Esmeralda 3','Espacio Dos','Espacio Uno','Fenix','Fenix 5','Fenix IV','Florencia 1 Residencial','FRACC. Atentli','FRACC. El  Cortijo','FRACC. Hacienda Santa Maria','FRACC. Los Cedros','FRACC. Venus','FRACC. Aqua','FRACC. Arboleda','FRACC. Don Eloy I','FRACC. Don Eloy II','FRACC. Don Eloy III','FRACC. El Dorado I','FRACC. El Encanto','FRACC. El Encanto II','FRACC. El Fenix I','FRACC. El Fenix II','FRACC. El Fenix III','FRACC. El Fortin','FRACC. El Rosedal','FRACC. El Secreto','FRACC. Grafito','FRACC. La Joya','FRACC. La Magdalena I','FRACC. La Magdalena II','FRACC. La Magdalena III','FRACC. Leno','FRACC. OLMOS','Fraccionamiento Premier','Fraccionamiento Premier I','Fraccionamiento Quinta ','Fraccionamiento Residencial Cipres','Fraccioanmiento Rinconada San Mateo','Fraccionamiento San Angel II','Fraccionamiento San Angel III','Fraccionamiento San Carlos','Fraccionamiento San Roman I','Fraccionamiento Santa Maria','Fraccionamiento Venus','Fraccionamiento Villas De Atenco','Fraccionamiento Villas La Magdalena 5','Fraccionamiento Vista Verde','Fracccionamiento Villas La Magdalena 6','Francisco I Madero','Fuentes De Cibeles','Fuentes De Diana','Grafito 2','Grupo IXTOC','Guadalupe','Hacienda Real I','Hacienda Real II','HDA. Santa Maria','IL Punto','Jade','Jardinez De Santa Maria','La Concepción', 'La Luna','La Magdalena','La Magdalena IV','Las Azaleas','Los Perales','Magnocentro Sección Palmas','Metepec','Nu Haus Carranza 834','Olmos','Quinta Regina','Quinta Cristina','Quinta Mariana','Real Atenco','Real Del Sol','Recinto San Mateo','Residencial 400UNO','Residencial Cipreses II','Residencial Concepto 11 Cero 2','Residencial Cumbres','Residencial Lysandra','Residencial Madero','Residencial Matamoros 1007','Residencial Meridian','Residencial Murano','Residencial Napoles 1','Residencial Napoles 2','Residencial Piñones','Residencial Velavid','Quintas Cristiana','San Buena','San Carlos','San Giminiano','San Miguel','San Roman 1','San Sebastian México','Santa Fe III','Santa Maria','Tezontle 1','Tezontle 2','Toluca','Unidad Habitacional Carlos Hank Gon','Unidad Habitacional Cuauhtemoc','Venustiano Carranza', 'Verona Residencial','Villas De Atenco','Villas De Santa Maria','Villas San Mateo Metepec','Autorizada','Don Eloy I','Don Eloy II','Don Eloy III','Santa Fe I','Santa Fe II','SAN ANGEL I','SIN CLASIFICAR' ]
        },
        yAxis: {
            title: {
                text:'Cantidad de Barrios'
            }
        },
        legend: {
            layout: 'vertical',
            aling: 'right',
            verticalAling: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Barrios',
            data: barrios
        }],
        responsive: {}

  });
</script>

                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
</div>




@endsection
