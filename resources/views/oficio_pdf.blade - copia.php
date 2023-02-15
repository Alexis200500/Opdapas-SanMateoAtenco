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

        .encabezado{
            
            font-size:12px; 
            text-align: right;
            margin-top: -50px;
            margin-right: 30px;
            
        }

        .encabezado2{
            text-align: right;
            font-family: Arial, Helvetica, sans-serif;
            margin-right: 30px;
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

        hr{
            color: black;
            width: 300px;
            margin-top: 80px;
        }

    </style>
</head>
<body>

    {{-- Encabezado --}}

    <div class="container">
        <!--<img style="width: 200px; height: 100px;" src="images/headerformulario@2xrecortado.png">-->
        <img style="width: 330px; height: 200px;" src="images/mesa3.png">
        <img src="images/mesa33.png" style="width: 300px; height: 200px;">
        {{-- <img src="images/logo3.png" style="width: 100px; height: 150px;"> --}}
    </div>
    <div>
        <p class="encabezado">
            <b>2022. AÑO DEL QUINCENTENARIO DE LA FUNDACIÓN DE TOLUCA DE LERDO, CAPITAL DEL ESTADO DE MÉXICO".<b>
        </p>
        <p class="encabezado2">
            {{$oficio->lugar_y_fecha}} <br>
            <b>NO. DE OFICIO:</b> {{$oficio->numero_oficio}} <br>
            <b>ASUNTO: </b>{{$oficio->asunto}}
        </p>
    </div>

    {{-- cuerpo del oficio --}}
    <div>
        <p class="cuerpo"><b>A QUIEN CORRESPONDA</b></p>
        <p class="cuerpo2">P R E S E N T E</p>

    </div>

    {{-- SALUDO --}}
    <div>
        <p class="saludo">Sirva este medio para enviarle un cordial saludo, ocasión que aprovecho para
            solicitar por así convenir a los intereses del sistema operador que dirijo y con el
            objetivo de eficientar los procesos de comunicación y operativos en el uso del
            software que utilizamos para nuestra área comercial lo siguiente:
            
            </p>
    </div>

    {{-- CONTENIDO DEL MENSAJE --}}
    <div>
        <p class="saludo">
            {{$oficio->contenido}}
        </p>
    </div>
    {{-- Despedida --}}
    <div>
        <p class="saludo">
            Sin otro particular agradeciendo de antemano su atención y apoyo quedó de Usted.
        </p>
    </div>

    {{-- FIRMA --}}
    <div>
        <p class="firma"><b>ATENTAMENTE</b></p>
    </div>

    <div>
        <hr>
        <p class="encargado"><b>ING. OMAR CHONG LOPEZ</b></p>
        <p class="puesto">ENCARGADO DEL DESPACHO DE LA DIRECCIÓN GENERAL DEL OPDAPAS
            DEL MUNICIPIO DE SAN MATEO ATENCO.</p>

    </div>
        
</body>
</html>
