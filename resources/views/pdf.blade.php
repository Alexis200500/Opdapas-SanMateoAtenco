<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>

    <link rel="icon" href="{{asset('images/logo2.png')}}">
    
    <style>
        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            margin: 0 0 1em 0;
            caption-side: top;
            }
            caption, td, th {
            padding: 0.3em;
            }
            th, td {
            width: 25%;
            }
            caption {
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <!--<img style="width: 200px; height: 100px;" src="images/headerformulario@2xrecortado.png">-->
        <img style="width: 180px; height: 100px;" src="images/mesa3.png">

    </div>

    <center><h2>Solicitud de Pipa de agua</h2><center>
        <h3>Datos generales<h3><br>
        <table>
            <tbody>
                <tr>
                    <th scope="row">Nombre:</th>
                    <td>{{$solicitud->nombre_completo_solicitud}}</td>
                    <th>Teléfono:</th>
                    <td>{{$solicitud->telefono_solicitud}}</td>
                </tr>
                <tr>
                    <th scope="row">Domicilio:</th>
                    <td>{{$solicitud->nombre_domicilio_solicitud}}</td>
                    <th>Barrio:</th>
                    <td>
                        {{$nombre_barrio->nombre_barrio}}
                    </td>

                </tr>
                <tr>
                    <th scope="row">Inmueble:</th>
                    <td>{{$solicitud->numero_inmueble}}</td>
                    <th>Calle y número:</th>
                    <td>{{$solicitud->calle_solicitud}} {{$solicitud->numero_domicilio_solicitud}}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <h3>Datos del servicio</h3><br>
            <table>
                <tbody>
                    <tr>
                        <th scope="row">Estatus:</th>
                        <td>{{$detalles->status_detalle}}</td>
                        <th>Fecha de emisión:</th>
                        <td>{{$detalles->fecha_detalle}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tipo de solicitud:</th>
                            @foreach($tipo as $tip)
                                @if($tip->id_tipo_solicitud == $detalles->id_tipo_solicitud)
                                    <td>{{$tip->nombre_tipo}}</td>
                                @else
                                @endif
                            @endforeach
                        <th>Litros: </th>
                        <td>{{$detalles->litros_detalle}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Descripción: </th>
                        <td>{{$detalles->descripcion_detalle}}</td>
                    </tr>
                </tbody>
            </table>
</body>
</html>
