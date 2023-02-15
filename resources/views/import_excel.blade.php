
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
                                                <h4>IMPORTAR EXCEL A MYSQL</h4><hr>
                                             </div>
                                        </center>
                                    </div>
                    <div class="row">

                    </div>
                    <div class="card-body">
                        <div class="content">
                            <div class="animated fadeIn">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">
                                        <form method="post" enctype="multipart/form-data" action="{{ route('importar')}}">
                                            {{csrf_field()}}
                                            <div class="card">
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Selecciona un archivo</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                            <input type="file" name="archivo" />
                                                        </div>
                                                    </div>


                                                             <center>
                                                                <button type="submit" class="btn btn-primary btn-md btn-block">Importar</button>
                                                                </center>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
