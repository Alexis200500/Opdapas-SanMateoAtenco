<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>    
    <meta name="description" content="Ayuntamiento de San Mateo Atenco">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('images/logo2.png')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
        .imag1{
            width: 90%;
            height: 110%;
        }

    </style>
</head>

<body>
    @include('sweetalert::alert')
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                    </li>
                    <li class="menu-title">
                        Opciones
                    </li>
                    
                        <!-- Solicitudes -->
                        <li class="menu-item-has-children dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" active> <i class="menu-icon fa fa-th"></i>Solicitudes</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="{{ route('solicitud') }}">Mis solicitudes</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="{{url('/home')}}">Solicitud de pipa de agua</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('solicitudm') }}">Solicitud de materiales</a></li>
                            </ul>
                        </li>
                        <!-- <li class="">
                            <a href="" aria-haspopup="true" aria-expanded="false" active> <i class="menu-icon fa fa-th"></i>Solicitud de materiales</a>
                        </li>-->
                        @if($datos_usuario -> roluser == "user")
                    @else
                        @if($datos_usuario -> roluser == "user1" || $datos_usuario -> roluser == "user2")
                            <!-- Oficios -->
                            <li class="menu-item-has-children dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" selected> <i class="menu-icon fa fa-th"></i>Oficios</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-th"></i><a href="{{ route('oficios') }}" active>Generar Oficios</a></li>
                                    <li><i class="menu-icon fa fa-th"></i><a href="{{route('consulta')}}" active>Mis Oficios</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" selected> <i class="menu-icon fa fa-th"></i>Actividades Pendientes</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-th"></i><a href="{{route('tablaoficios')}}" active>Oficios</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="{{route('cronograma')}}" > <i class="menu-icon fa fa-th"></i>Cronograma de Actividades</a>
                            </li>
                            <li class="">
                                <a href="{{route('tareas')}}" > <i class="menu-icon fa fa-th"></i>Tareas</a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
        </nav>
    </aside>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/mesa33recortado.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <!-- <span class="count bg-danger">1</span> -->
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <!-- <span class="count bg-primary">1</span> -->
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('archivos/'.$datos_usuario->foto_user) }}" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Mi perfil</a>
                            <!-- -- -->
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power -off"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <img style="" src="images/headerformulario@2xrecortado.png">
                                <h2 class="box-title">Formato de Solictud de Materiales</h2><br>
                                <h5>En emergencias contacte (123) 456 7890 o por messenger en facebook</h5>
                            </div>
                            <div class="row">
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <div class="animated fadeIn">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <form method="POST" action="{{route('guardamaterial')}}">
                                                    @csrf
                                                    <div class="card">
                                                        <form>
                                                        <div class="card-header">
                                                            <strong>Datos personales</strong>
                                                        </div>
                                                        <div class="card-body card-block">
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Nombre / Apellidos</label> 
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                    <input class="form-control" placeholder="Ej: Emmanuel Campos Genaro" name="nombre_completo_material" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Numero telefónico</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                    <input class="form-control" placeholder="Ej: 7221234567" name="telefono_material" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Domicilio</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                                    <input class="form-control" placeholder="Ej: San Mateo Atenco, CP 1234." name="nombre_domicilio_material" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Barrio.</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                        <select class="form-control" tabindex="1" name="id_barrio" required>
                                                                            <option disabled>Selecciona una opción.</option>
                                                                            @foreach ($barrios as $barrio)
                                                                            <option value={{$barrio->id_barrio}}>{{$barrio->nombre_barrio}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label" >Numero de Inmueble</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                                        <input class="form-control" placeholder="1" name="numero_inmueble" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label" >Calle</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                        <input class="form-control" placeholder="Ej: Francisco I Madero" name="calle_material" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label">Número de Domicilio</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                        <input class="form-control" placeholder="10" name="numero_domicilio_material" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <strong class="card-title">Datos de Solicitud</strong>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label class=" form-control-label">Estatus</label>
                                                                    <div class="input-group">
                                                                        <table>
                                                                            <tr>
                                                                                <th><input type="radio" name="status_detalle" value="En Espera" required>En espera  <br></th>
                                                                                <th><input type="radio" name="status_detalle" value="Autorizado" required>Autorizado  <br></th>
                                                                                <th><input type="radio" name="status_detalle" value="Entegrado" required>Entegrado  <br></th>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label">Fecha de Solicitud</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input type="date" class="form-control" name="fecha_detalle" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label">Tipo de Material</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                                                                        <select class="form-control" tabindex="1" name="id_tipo_material" required>
                                                                            <option disabled>Selecciona una opción.</option>
                                                                            @foreach ($tipo_materials as $material)
                                                                            <option value={{$material->id_tipo_material}}>{{$material->material}}</option>
                                                                            @endforeach    
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label">Descripción</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                        <textarea class="form-control" name="descripcion_detalle" required> </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label">Cantidad</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-tint"></i></div>
                                                                        <input class="form-control" name="cantidad_material" required>
                                                                    </div>
                                                                </div>
                                                                <center>
                                                                    <button type="submit" class="btn btn-primary btn-md btn-block">Enviar</button>
                                                                </center>
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
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add a category </strong></h4>
                        </div>
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-4">
                        Copyright &copy; 2022  Ayuntamiento de San Mateo Atenco.
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="">Smart Site Company</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>

</body>
</html>
