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

    {{-- Encabezado --}}
    <div class="body">
            <div class="container">
                <!--<img style="width: 200px; height: 100px;" src="images/headerformulario@2xrecortado.png">-->
                <div class="container">
                    <table>
                        <tr>
                            <th><img style="width: 435px; height: 75px;" src="images/fon.jpg" ></th>
                            <th><h1>Folio</h1></th>
                            {{-- <input type="text" style="width: 60px; height: 35px; border: ridge #000000 1px;"> --}}
                        </tr>
                    </table>
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
                                <th colspan="3">Fecha De Solisitud</th>
                            </tr>
                            <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                            <th colspan="5" style="color:#ffffff" ><font size=2>DATOS DEL SOLICITANTE (INE)</font></th>

                                <th style="background: rgb(255, 254, 254); ">Día</th>
                                <th style="background: rgb(255, 254, 254);">Mes</th>
                                <th style="background: rgb(255, 254, 254);">Año</th>
                            </tr>
                        </thead>
                        <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <td colspan="4"><font size=1>NOMBRE DEL PROPIETARIO O RAZÓN SOCIAL:</font></td>
                                <td colspan=4"><font size=1>REPRESENTANTE LEGAL:</font></td>
                            </tr>
                            <tr>
                                <td colspan="1"><font size=1>CALLE:</font></td>
                                <td colspan="4"><font size=1>NO. EXTERIOR E INTERIOR:</font></td>
                                <td colspan="3"><font size=1>FRACIONAMIENTO, COLONIA, BARRIO:</font></td>
                            </tr>
                        </tbody>
                        <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <td colspan=""><font size=1>CODIGO POSTAL:</font></td>
                                <td colspan="3"><font size=1>TELEFONO DEL SOLICITANTE:</font></td>
                                <td colspan="4"><font size=1>CARÁCTER QUE COMPARECE: ( )PROPIETARIO ( )APODERADO LEGAL:</font></td>
                            </tr>
                            <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <th colspan="8"  style="color:#ffffff"><font size=2>DATOS DEL INMUEBLE (RECIBO PREDIAL O CESIÓN DE DERECHOS):</font></th>
                            </tr>
                            <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <td colspan="4"><font size=1>CALLE:</font></td>
                                <td colspan="4"><font size=1>NUMERO EXTERIOR O INTERIOR:</font></td>
                            </tr>
                            <tr>
                                <td colspan="8"><font size=1>COLONIA O POBLACION:</font></td>
                            </tr>
                            <tr>
                                <td colspan="4"><font size=1>CODIGO POSTAL:</font></td>
                                <td colspan="4"><font size=1>CLAVE CATASTRAL:</font></td>
                            </tr>
                            <tr>
                                <td colspan="3"><font size=1>SUPERFICIE DE PREDIO:</font></td>
                                <td colspan="1"><font size=1>SUPERFICIE CONSTRUIDA:</font></td>
                                <td colspan="4"><font size=1>EL PREDIO CUENTA CON LOS SERVICIOS DE AGUA Y ALCANTARILLADO SI ( ) NO ( )</font></td>
                            </tr>
                            <tr>
                                <td colspan="4"  style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);"><font size=2  style="color:#ffffff">MOTIVO DE LA SOLICITUD:</font></td>
                                <td colspan="4"><font size=1>NOTA : SELECCIONE UNA DE LAS SIGUIENTES OPCIONES Y LLENAR SOLO LA SELECCIÓN QUE FUE DE SUELECCIÓN</font></td>
                            </tr>
                            <tr>
                                <td colspan="4"><font size=1></font>

                                    <input type="checkbox"><font size=1>CONEXIÓN DE AGUA POTABLE</font> <br>
                                    <input type="checkbox"><font size=1>CONEXIÓN DE DRENAJ</font><br>
                                    <input type="checkbox"><font size=1>FUGA</font><br>
                                    <input type="checkbox"><font size=1>REUBICACIÓN DE SERVICIOS</font><br>
                                    <input type="checkbox"><font size=1>ENTREGA PARCIAL</font><br>
                                    <input type="checkbox"><font size=1>OTROS __________________________________________</font><br>
                                    </td>
                                    <td colspan="4"><font size=</font>
                                    <input type="checkbox"><font size=1>FALTA DE SUMINISTRO DE AGUA POTABLE</font></font><br>
                                    <input type="checkbox"><font size=1>TIPO DE PREDIO</font></font><br>
                                    <input type="checkbox"><font size=1>VERIFICACIÓN DE MEDIDOR</font></font><br>
                                    <input type="checkbox"><font size=1>VERIFICACIÓN DE LECTURA</font></font><br>
                                    <input type="checkbox"><font size=1>RESTRICCIÓN</font></font><br>
                                    <input type="checkbox"><font size=1>CONSTANCIA DE NO SERVICIO</font></font><br>
                                    <input type="checkbox"><font size=1>CONSTANCIA DE NO ADEUDO</font></font><br>
                                    </td>
                                </tr>
                                <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <th colspan="8"  style="color:#ffffff"><font size=2>CARACTERÍSTICAS DEL SERVICIO SOLICITADO:</font></th>
                            </tr>
                            <tbody style="background: rgb(255, 255, 255); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <td colspan="8"><font size=1>AGUA:</font></font></td>
                            </tr>
                            <tr>
                                <td colspan="4"><font size=1>NO. DE TOMAS:</font></td>
                                <td colspan="3"><font size=1>DIAMETRO DE TOMA:</font></td>
                                <td rowspan="3"><font size=1>NÚMERO DE BENEFICIARIOS </font></td>
                            </tr>
                            <tr>
                                <td colspan="7"><font size=1  align="center">DRENAJE:</font></td>
                            </tr>
                            <tr>
                                <td colspan="4"><font size=1>NO. DE DESCARGAS:</font></td>
                                <td colspan="3"><font size=1>DIÁMETRO DE LA DESCARGA:</font></td>
                            </tr>
                            <tbody style="background: rgb(51, 51, 51); border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <th colspan="4" style="color:#ffffff"><font size=2> SERVICIO:</font></th>
                                <td colspan="2"style="background: rgb(255, 254, 254);"><input type="checkbox" ><font size=1>DOMESTICO</font></font></td>
                                <td colspan="2"style="background: rgb(255, 254, 254);"><input type="checkbox" ><font size=1>COMERCIAL</font></font></td>
                            </tr>
                        </tbody>
                    </table>
                    <center>
                        ___________________________________________________ <br>
                    <label align="center" type="text" ><font size=1>NOMBRE Y FIRMA DEL PROPIETARIO</font>
                     </center>
            </div>

            <div align="center" class="footerclassbackground">
                <img src="images/piepag.jpg" style="width: 750px; height: 95px;">
            </div>
    </div>
<br> <br><br>
    <div class="body">
            <div class="container">
                <!--<img style="width: 200px; height: 100px;" src="images/headerformulario@2xrecortado.png">-->
                <div>
                    <table>
                        <tr>
                            <th  align="left"><img style="width: 435px; height: 60px;" src="images/fon.jpg" ></th>

                            {{-- <input type="text" style="width: 60px; height: 35px; border: ridge #000000 1px;"> --}}
                        </tr>
                    </table>
                </div>
                <div align="center">
                    <img src="images/line.jpg" style="width: 700px; height: 7px;">
                </div>
            </div>
            <table >
                <tr>
                    <td><div align="left" class="encabezado">
                    <table border="1" style="width: 260px; " >

                        <thead>
                            <tbody style=" border: 1px solid rgb(0, 0, 0);">
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="height: 10px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <center>
                <p> <font size=1>DOCUMENTOS QUE DEBEN DE ANEXAR:</font></p></center>
                    <ol type="a">
                    <li><font size=1>Copia certficada del documento que acredita la propiedad (original para cotejar).</font></li>
                    <li><font size=1>Copia certficada del acta constitutiva en caso de ser persona moral.</font></li>
                    <li><font size=1>Copia de la licencia de uso de suelo, alineamiento y número oficial expedido por la Dirección de Desarrollo Urbano Municipal.</font></li>
                    <li><font size=1>Copia de identificación del propietario y/o del representante legal</font></li>
                    <li><font size=1>Carta poder.</font></li>
                    <li><font size=1>Copia del recibo de pago de agua (en caso de contar con el servicio)</font></li>
                    <li><font size=1>Copia del recibo predial o ejidal en su caso</font></li>
                    <li><font size=1>Plano de identificación de conjunto y/o arquitectónico</font></li>
                    <li><font size=1>Proyecto de agua potable, (plano y memoria de cálculo)</font></li>
                    <li><font size=1>Proyecto de Alcantarillado Sanitario (Plano y memoria de cálculo)</font></li>
                </ol>

                    <center>
                        _______________________________ <br>
                    <label align="center" type="text" ><font size=1>Nombre y Firma de quien superviso</font>
                     </center>
        </td>
                    <td>
                        <div>
                        <div >
                            <center>
                            <label for=""><font size=2>DATOS QUE DEBE CONTENER EL CROQUIS DE LOCALIZACIÓN</font></label>
                            </center>
                            <ul>
                            <li align="left"><font size=1>Distancia de las dos esquinas a los linderos de predio</font></li>
                            <li align="left"><font size=1>Medidas del frente y fondo del mismo</font></li>
                            <li align="left"><font size=1>Nombre de las calles que forman la manzana</font></li>
                            <li align="left"><font size=1>Indicar el acceso al predio</font></li>
                            </ul>
                            <br>
                            <center>
                            <label for=""><font size=2>NOTA</font></label>
                            </center>
                             <ul>
                            <li align="left"><font size=1>Los planos deben ser presentados en una escala que resulte legible en copia bond, doblados en tamaño carta en un juego de 90 X 60 cm, así como la memoria de cálculo.</font></li>
                            <li align="left"><font size=1>El proyecto deberá estar geo referenciado por coordenadas otorgadas por el Organismo.</font></li>
                            <li align="left"><font size=1>Documentos requeridos con fundamento en lo dispuesto en los artículos:10 del Código de Procedimientos Administra�vos del Estado de México,8 y 9 del Reglamento del libro Quinto del Código Administrativo del Estado de México.</font></li>

                            </ul>
                    </div>
            </div>

                        <div  class="encabezado2" >
                            <label for=""><font size=2>Se autorizo el:</font></label>
                            <table border="1"  align="right" style="width: 260px;">
                                <tr>
                                    <td style="height: 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="height: 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="height: 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="height: 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="height: 10px;"></td>
                                </tr>
                            </table>
                        </div>
                        <br><br>
                        <center>
                        _______________________________ <br>
                    <label align="center" type="text" ><font size=1>Nombre y Firma de quien autorizo</font>
                     </center>
        </td>

            </table>

                <div>

                    <center>
                    <label align="center" type="text" ><font size=1>NOTA: La Presentación de esta solicitud de la realización del trámite No construye autorización</font>
                     </center>
                     <center>
                         <table border="1" style="width: 650px;" class="encabezado2">
                             <tr style="height: 5px;">
                                 <td style="height: 5px;"><font size=8px>Pagar Conexión de Agua  (  )</font></td>
                                 <td style="height: 5px;"><font size=8px></font></td>
                                 <td  style="height: 5px; " ><u>O B S E R V A C I O N E S</u><font size=8px></font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Kit de Instalación                        (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                                 <td rowspan="10" style="height: 5px; " ><font size=8px></font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Conexión de Agua                          (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Conexión de Drenaje                       (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar constancia de Factibilidad de servicios   (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Factibilidad de Servicios                 (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Paso de Red                               (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Constancia de no Adeudo                   (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Constancia de no Servicio                 (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>Pagar Ruptura de Asfalto                        (  )</font></td>
                                 <td><font size=8px>$__________________</font></td>
                             </tr>
                             <tr>
                                 <td><font size=8px>TOTAL</font></td>
                                 <td><font size=8px></font></td>
                             </tr>

                         </table>
                     </center>
            </div>

            <div align="center" class="footerclassbackground">
                <img src="images/piepag.jpg" style="width: 750px; height: 85px;">
            </div>
    </div>
</body>
</html>
