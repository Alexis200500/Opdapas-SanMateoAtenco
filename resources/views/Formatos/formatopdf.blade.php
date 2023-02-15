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
            .aling{
                text-align: left;
            }

            .td{
                margin-top: -0px;
            }

        .encabezado{

            font-size:12px;
            margin-top: -0px;

        }
        .body{
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            }

        .encabezado2{
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 35px;
        }
        .pie{
            margin-top: 48px;
        }
        .footerclassbackground{
            color:#eeeeee;
            position: fixed;
            top: auto;
            bottom:0;
            width:100%;
            display:
            inline-block;
        }
        .cuerpo{
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 30px;
        }

        .cuerpo2{
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 30px;
            margin-top: -15px;
        }

        .saludo{
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 30px;
            margin-right: 30px;
            text-align: justify;
            font-size: 18px;
        }

        .firma{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .encargado{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-top: -5px;
        }
        .puesto{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-top: -10px;
        }
        .container{
             margin-left: 0px;
            margin-right: 0px;
            margin-top: 4px;
        }

        hr{
            color: black;
            width: 300px;
            margin-top: 80px;
        }

    </style>
</head>
<body>
    <div class="container">
        <!--<img style="width: 200px; height: 100px;" src="images/headerformulario@2xrecortado.png">-->
        <div class="container">
                    <img style="width: 435px; height: 75px;" src="images/fon.jpg" >
                    {{-- <input type="text" style="width: 60px; height: 35px; border: ridge #000000 1px;"> --}}
        </div>
        <div align="center">
            <img src="images/line.jpg" style="width: 700px; height: 7px;">
        </div>
    </div>

    <div>
        <h3  align="left">FORMATO DE SOLICITUD</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="5"></th>
                        <th colspan="3">Fecha de solicitud: {{$form_solicitud->fecha_solicitud}}</th>
                    </tr>
                    <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);">
                    <tr>
                    <th colspan="8" style="color:#ffffff" ><font size=2>DATOS DEL SOLICITANTE (INE)</font></th>
                    </tr>
                </thead>
                <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                    <tr>
                        <td colspan="8">Nombre del propietario o razón social: {{$form_solicitud->nombre_solicitud}}</td>
                    </tr>
                    <tr>
                        <td colspan="8">Representante legal: {{$form_solicitud->representante}}</td>
                    </tr>
                    <tr>
                        <td colspan="8">Calle: {{$form_solicitud->calle_solicitud}}</td>

                    </tr>
                    <tr>
                        <td colspan="4">No. Exterior e interior {{$form_solicitud->no_solicitud}}</td>
                        <td colspan="4">Código postal: {{$form_solicitud->cp_solicitud}}</td>
                    </tr>
                    <tr>
                        <td colspan="8">Fraccionamiento, colonia,barrio: {{$form_solicitud->barrio}}</td>
                    </tr>
                </tbody>
                <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                    <tr>

                        <td colspan="4">Teléfono del solicitante: {{$form_solicitud->telefono_solicitud}}</td>
                        <td colspan="4">Carácter que comparece: {{$form_solicitud->caracater_solicitud}}</td>
                    </tr>
                    <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                    <tr>
                        <th colspan="8"  style="color:#ffffff"><font size=2>DATOS DEL INMUEBLE (RECIBO PREDIAL O CESIÓN DE DERECHOS):</font></th>
                    </tr>
                    <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                    <tr>
                        <td colspan="8">Calle: {{$form_solicitud->calle_in_solicitud}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">Número exterior o interior {{$form_solicitud->no_in_solicitud}}</td>
                        <td colspan="4">Código postalL: {{$form_solicitud->cp_in_solicitud}}</td>
                    </tr>
                    <tr>
                        <td colspan="8">Colonia o población: {{$form_solicitud2->barrio2}}</td>
                    </tr>
                    <tr>

                        <td colspan="4">Clave castral: {{$form_solicitud->clave_solicitud}}</td>
                        <td colspan="4">Superficie de predio: {{$form_solicitud->superficie_pred_solicitud}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Superficie construida: {{$form_solicitud->superficie_const_solicitud}}</td>
                        <td colspan="5">El predio cuenta con los servicios de agua y alcantarillado: {{$form_solicitud->servicoal}}</td>
                    </tr>
                    <tr>
                        <td colspan="8"  style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);"><font size=2  style="color:#ffffff">MOTIVO DE LA SOLICITUD</font></td>

                    </tr>
                    <tr>
                        <td colspan="8">Motivo: {{$form_solicitud->motivo_solicitud}}</td>
                    </tr>
                    <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">

                    <tr>
                        <th colspan="8"  style="color:#ffffff"><font size=2>CARACTERÍSTICAS DEL SERVICIO SOLICITADO:</th>
                    </tr>
                    <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">

                    <tr>
                        <td colspan="2">No. de tomas: {{$form_solicitud->no_tomas}}</td>
                        <td colspan="3">Diámetro de toma: {{$form_solicitud->diametro_toma}}</td>
                        <td colspan="3">Número de beneficiarios: {{$form_solicitud->no_bene_toma}} </td>
                    </tr>

                    <tr>
                        <td colspan="2">No. de descargas: {{$form_solicitud->no_descarga}}</td>
                        <td colspan="3">Diámetro de descarga: {{$form_solicitud->diametro_descarga}}</td>
                        <td colspan="3">Servicio: {{$form_solicitud->servicio}}</td>
                    </tr>

                </tbody>
            </table>
            <br><br><br>
            <center>
                ___________________________________________________ <br>
            <label align="center" type="text" ><font size=2>NOMBRE Y FIRMA DEL PROPIETARIO</font>
             </center>

             <div align="center" class="footerclassbackground">
                <img src="images/piepag.jpg" style="width: 750px; height: 95px;">
            </div>

    </div>

</body>

</html>
