@extends('inicio')

@section('contenido')

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
                                                <h3 style="color:#ffffff">Fromato de Solisitud</h3><hr>
                                             </div>
                                        </center>
                                    </div>
                                    <br>
                                    <div class="row">
                                    </div>
                                    <div class="card-body">
                                        <div class="content">
                                            <div class="animated fadeIn"><br>
                                                                     <center>
                                                                           <div class="card-header">
                                                                                <h4 style="color:#ffffff">DATOS DEL SOLICITANTE (INE)</h4>
                                                                            </div>
                                                                        </center>
                                            <div>
                                                <div class="row">
                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <p>Corrige los siguientes errores:</p>
                                                            <ul>
                                                                @foreach ($errors->all() as $message)
                                                                    <li>{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <div class="col-xs-6 col-sm-6">
                                                                <form method="POST" action="{{ route('guardar_formato') }}">
                                                                    @csrf
                                                                    <div class="card">
                                                                                    <div class="card-body card-block">

                                                                                        <div class="form-group">
                                                                                                <label class=" form-control-label">NOMBRE DEL PROPIETARIO O RAZON SOCIAL</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                                                    <input type="text" class="form-control" value="" name="nombre_solisitud" required>
                                                                                                </div>
                                                                                            </div>

                                                                                        <div class="form-group">
                                                                                            <label class=" form-control-label">FECHA DE SOLISITUD:</label>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input type="date" class="form-control"  name="" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class=" form-control-label">REPRESENTANTE LEGAL:</label>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                                                <input class="form-control" name="representante_solisitud" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class=" form-control-label">CALLE:</label>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                <input class="form-control"  name="calle_solisitud" required>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="form-group">
                                                                                                <label class=" form-control-label" >NO. EXTERIOR E INTERIOR :</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                    <input class="form-control"  name="no_solisitud" required>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-6 col-sm-6">
                                                                                    <div class="card">
                                                                                        <div class="form-group">
                                                                                                <label class=" form-control-label">FRACCIONAMIENTO, COLONIA , BARRIO.</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                                                    <input class="form-control"  name="barrio_solisitud" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class=" form-control-label" >CÓDIGO POSTAL:</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                    <input class="form-control"  name="cp_solisitud" required>
                                                                                                </div>
                                                                                            </div>
                                                                                        <div class="form-group">
                                                                                                <label class=" form-control-label">TELEFONO DEL SOLICITANTE</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                                                    <input type="text" class="form-control" name="telefono_solisitud" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class=" form-control-label">CATARCTER QUE COMPARECE</label>
                                                                                                <select class="form-control" name="caracater_solisitud">
                                                                                                    <option value="PROPIETARIO">PROPIETARIO</option>
                                                                                                    <option value="APODERADO LEGAL">APODERADO LEGAL</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                    <br><br>
                                                                     <div class="row">
                                                                        <div class="col-xs-6 col-sm-6">
                                                                             <div class="card">
                                                                                    <center>
                                                                                            <div class="card-header">
                                                                                                <h4 style="color:#ffffff">DATOS DEL INMUEBLE (RECIBO PREDIAL O CESIÓN DE DERECHOS)</h4>
                                                                                            </div>
                                                                                        </center>
                                                                                    <div class="card-body card-block">
                                                                                        <div class="form-group">
                                                                                                <label class=" form-control-label">CALLE</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                                                    <input type="text" class="form-control" name="calle_in_solisitud" required>
                                                                                                </div>
                                                                                            </div>
                                                                                        <div class="form-group">
                                                                                            <label class=" form-control-label">COLONIA O POBLACION:</label>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                                                <input class="form-control" name="id" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class=" form-control-label">CLAVE CATASTRAL:</label>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                <input class="form-control"  name="clave_solisitud" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class=" form-control-label">SUPERFICIE CONSTRUIDA:</label>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                <input class="form-control"  name="superficie_const_solisitud" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <label class=" form-control-label">FRACCIONAMIENTO, COLONIA , BARRIO.</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                                                    <input class="form-control"  name="barrrio_in_solisitud" required>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-6 col-sm-6">
                                                                                    <div class="card">
                                                                                        <center>
                                                                                            <div class="card-header">
                                                                                                 <h4 style="color:#ffffff">DATOS DEL INMUEBLE (RECIBO PREDIAL O CESIÓN DE DERECHOS)</h4>
                                                                                            </div>
                                                                                        </center>
                                                                                        <div class="form-group">
                                                                                               <label class=" form-control-label">NUMERO INTERIOR O EXTERIOR</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                    <input class="form-control"  name="no_in_solisitud" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class=" form-control-label" >CÓDIGO POSTAL:</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                    <input class="form-control"  name="cp_in_solisitud" required>
                                                                                                </div>
                                                                                            </div>
                                                                                        <div class="form-group">
                                                                                                <label class=" form-control-label">SUPERFICE DEL PREDIO</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                    <input type="text" class="form-control" name="superficie_pred_solisitud" required>
                                                                                                </div>
                                                                                            </div><br>
                                                                                            <div class="form-group">
                                                                                            <label class=" form-control-label">EL PREDIO CUENTACON LOS SERVICIOS DE AGUA Y ALCANTARILLADO</label>
                                                                                            <div class="input-group">
                                                                                            <div class="form-check form-check-inline">
                                                                                                    <input type="radio" name="servicoal" value=" SI " required>
                                                                                                    <label class="form-check-label" for="inlineRadio1">SI</label>


                                                                                                    <input type="radio" name="servicoal" value="NO" required>
                                                                                                    <label class="form-check-label" for="inlineRadio2">NO</label>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                    <br><br>

                                                                    <div class="row">
                                                                            <div class="col-xs-6 col-sm-6">
                                                                                <div class="card">
                                                                                        <center>
                                                                                                <div class="card-header">
                                                                                                    <h4 style="color:#ffffff">MOTIVO DE LA SOLICITUD</h4>
                                                                                                </div>
                                                                                            </center>

                                                                                        <div class="card-body card-block">
                                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                        <input type="radio" name="motivo_solisitud" value="CONEXÓN DE AGUA POTABEL" required>
                                                                                        <label class="form-check-label" for="inlineRadio1">CONEXÓN DE AGUA POTABEL</label><br>


                                                                                        <input type="radio" name="motivo_solisitud" value="CONEXIÓN DE DRENAJE" required>
                                                                                        <label class="form-check-label" for="inlineRadio2">CONEXIÓN DE DRENAJE </label><br>

                                                                                        <input type="radio" name="motivo_solisitud" value="FUGA" required>
                                                                                        <label class="form-check-label" for="inlineRadio3">FUGA</label><br>

                                                                                        <input type="radio" name="motivo_solisitud" value="REUBICACIÓN DE SERVICIOS<" required>
                                                                                        <label class="form-check-label" for="inlineRadio3">REUBICACIÓN DE SERVICIOS</label><br>

                                                                                        <input type="radio" name="motivo_solisitud" value="ENTREGA PARCIAL" required>
                                                                                        <label class="form-check-label" for="inlineRadio1">ENTREGA PARCIAL</label>


                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-6">
                                                                                        <div class="card">
                                                                                            <center>
                                                                                <div class="card-header">
                                                                                    <h4 style="color:#ffffff">MOTIVO DE LA SOLICITUD</h4>
                                                                                </div>
                                                                            </center>
                                                                                        <div class="form-group">
                                                                                <div class="input-group">
                                                                                <div class="form-check form-check-inline">
                                                                                        <input type="radio" name="motivo_solisitud" value="FALTA DE SUMINISTRO DE AGUA POTABLE" required>
                                                                                        <label class="form-check-label" for="inlineRadio1">FALTA DE SUMINISTRO DE AGUA POTABLE</label><br>


                                                                                        <input type="radio" name="motivo_solisitud" value="TIPO DE PREDIO" required>
                                                                                        <label class="form-check-label" for="inlineRadio2">TIPO DE PREDIO</label><br>

                                                                                        <input type="radio" name="motivo_solisitud" value="VERIFICACIÓN DE MEDIDOR" required>
                                                                                        <label class="form-check-label" for="inlineRadio3">VERIFICACIÓN DE MEDIDOR</label><br>

                                                                                        <input type="radio" name="motivo_solisitud" value="VERIFICACION DE LECTIRA" required>
                                                                                        <label class="form-check-label" for="inlineRadio3">VERIFICACION DE LECTIRA</label><br>

                                                                                        <input type="radio" name="motivo_solisitud" value="RESTRICIÓN" required>
                                                                                        <label class="form-check-label" for="inlineRadio1">RESTRICIÓN</label><br>


                                                                                        <input type="radio" name="motivo_solisitud" value="CONSTANCIA DE NO SERVICIO" required>
                                                                                        <label class="form-check-label" for="inlineRadio2">CONSTANCIA DE NO SERVICIO</label><br>

                                                                                        <input type="radio" name="motivo_solisitud" value="CONSTANCIA DE NO ADEUDO" required>
                                                                                        <label class="form-check-label" for="inlineRadio3">CONSTANCIA DE NO ADEUDO</label><br>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                    <br><br>
                                                                    <div class="row">
                                                                            <div class="col-xs-6 col-sm-6">
                                                                                <div class="card">
                                                                                        <center>
                                                                                                <div class="card-header">
                                                                                                    <h4 style="color:#ffffff">CARACTERÍSTICAS DEL SERVICIO SOLICITADO (AGUA)</h4>
                                                                                                </div>
                                                                                            </center>
                                                                                        <div class="form-group">
                                                                                                    <label class=" form-control-label">NÚMERO DE TOMAS</label>
                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                        <input type="text" class="form-control" name="no_tomas" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class=" form-control-label">DIÁMETRO DE LA TOMA</label>
                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                        <input type="text" class="form-control" name="diametro_toma" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class=" form-control-label">NÚMERO DE BENEFICIARIOS</label>
                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                        <input type="text" class="form-control" name="no_bene_toma" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-6">
                                                                                        <div class="card">
                                                                                            <center>
                                                                                <div class="card-header">
                                                                                    <h4 style="color:#ffffff">CARACTERÍSTICAS DEL SERVICIO SOLICITADO (DRENAJE)</h4>
                                                                                </div>
                                                                            </center>
                                                                                <div class="form-group">
                                                                                                    <label class=" form-control-label">NÚMERO DE DESCARGAS</label>
                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                        <input type="text" class="form-control" name="no_descarga" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class=" form-control-label">DIAMETRO DE LA DESCARGA</label>
                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                        <input type="text" class="form-control" name="diametro_descarga" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class=" form-control-label">NÚMERO DE BENEFICIARIOS</label>
                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                                                        <input type="text" class="form-control" name="no_ben_descarga" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                <label class=" form-control-label">SERVICIOS</label>
                                                                                                <div class="input-group">
                                                                                                <div class="form-check form-check-inline">
                                                                                                        <input type="radio" name="servicio" value=" SI " required>
                                                                                                        <label class="form-check-label" for="inlineRadio1"> DOMESTICO</label>


                                                                                                        <input type="radio" name="servicio" value="NO" required>
                                                                                                        <label class="form-check-label" for="inlineRadio2">COMERCIAL</label>


                                                                                                    </div>
                                                                                                </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <center>
                                                                                                    <button type="submit" class="btn btn-primary btn-md btn-block">Enviar</button>
                                                                                                </center>
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                </div>
                                                            </div>
                                                        </div>








@endsection
