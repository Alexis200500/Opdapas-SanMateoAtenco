<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Usuario</title>
    <link rel="icon" href="{{asset('images/logo2.png')}}">


    <style>

        .folio{
            font-size:20px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: right;
            font-weight: bold;
            margin-top: -40px;
            margin-right: 150px;

        }
        .encabezado{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: bold;
            margin-top:-6px;
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




        .fecha{
            text-align: right;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            margin-right:15px;
        }
        .texto{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            margin-left:15px;
            margin-top:-7px;
        }

        .texto2{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            margin-left:15px;
            font-weight: bold;
            margin-top:-7px;
        }


    </style>
</head>
<body>

    {{-- Encabezado --}}

    <div class="container">
        <!--<img style="width: 200px; height: 100px;" src="images/headerformulario@2xrecortado.png">-->
         <img style="width: 435px; height: 75px;" src="images/fon.jpg" >
    </div>

    <div class="folio">
        FICHA:{{$fichas->id_ficha}}
    </div>
    <br>
    <div>
      <img src="images/line.jpg" style="width: 700px; height: 7px;">
    </div>
    <center>
    <table border="1">
                <thead>
                    <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);">
                    <tr>
                    <th colspan="14" style="color:#ffffff" ><font size=2>DATOS DEL USUARIO</font></th>
                    </tr>
                </thead>
                <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                    <tr>
                        <td colspan="7">Nombre Completo: {{$fichas->nombre_completo_ficha}} </td>
                         <td colspan="7">Fecha: {{$fichas->fecha_ficha}} </td>
                    </tr>
                    <tr>
                        <td colspan="7">Edad: {{$fichas->edad_ficha}} </td>
                         <td colspan="7">Sexo: {{$fichas->sexo_ficha}} </td>
                    </tr>
                    <tr>
                        <td colspan="7">E-Mail: {{$fichas->email_ficha}}  </td>
                        <td colspan="7">Número de casa: {{$fichas->num_casa_ficha}} </td>

                    </tr>
                    <tr>
                        <td colspan="7">Celular:{{$fichas->celular_ficha}} </td>
                        <td colspan="7">Barrio:{{$fichas->id_barrio}} </td>
                    </tr>
                    <tr>
                        <td colspan="7"> Número de domicilio: {{$fichas->numero_inmueble_ficha}}</td>
                        <td colspan="7"> Número de inmueble: {{$fichas->numero_inmueble_ficha}} </td>
                    </tr>
                    <tr>
                        <td colspan="7">Número:{{$fichas->id}} </td>
                        <td colspan="7">Estado:{{$fichas->status_ficha}} </td>
                    </tr>
                    <tr>
                        <td colspan="14">Curp: {{$fichas->curp_ficha}}</td>
                    </tr>

                    <tr>
                        <td colspan="7">Ine: </td>
                         <td colspan="7">Compribante de Domicilio: </td>
                    </tr>
                     <tr>

                        <td colspan="7"> <img style="width: 300px; height: 200px;" src="../public/archivos/{{ $fichas->ine_ficha }}"></td>
                         <td colspan="7"> <img style="width: 300px; height: 200px;" src="../public/archivos/{{ $fichas->comprobante_ficha }}"></td>
                    </tr>

                </tbody>
            </table>
            </center>

        <div align="center" class="footerclassbackground">
                <img src="images/piepag.jpg" style="width: 750px; height: 95px;">
            </div>

        </body>
</html>
