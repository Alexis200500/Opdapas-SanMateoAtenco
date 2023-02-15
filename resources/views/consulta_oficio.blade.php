<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge"> 
        <title>{{ config('app.name', 'Laravel') }}</title>    
        <meta name="description" content="Ayuntamiento de San Mateo Atenco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('tablero/img/favicon.png')}}">
        <!-- Google Fonts ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/font-awesome.min.css')}}">
        <!-- nalika Icon CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/nalika-icon.css')}}">
        <!-- owl.carousel CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('tablero/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('tablero/css/owl.transitions.css')}}">
        <!-- animate CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/animate.css')}}">
        <!-- normalize CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/normalize.css')}}">
        <!-- meanmenu icon CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/meanmenu.min.css')}}">
        <!-- main CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/main.css')}}">
        <!-- morrisjs CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/morrisjs/morris.css')}}">
        <!-- mCustomScrollbar CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- metisMenu CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/metisMenu/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('tablero/css/metisMenu/metisMenu-vertical.css')}}">
        <!-- calendar CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/calendar/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('tablero/css/calendar/fullcalendar.print.min.css')}}">
        <!-- style CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/style.css')}}">
        <!-- responsive CSS ============================================ -->
        <link rel="stylesheet" href="{{asset('tablero/css/responsive.css')}}">
        <!-- modernizr JS ============================================ -->
        <script src="{{asset('tablero/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <style>
            label, h4, th, .blanco{
                color: #C5C6C7;
            }
        </style>
    </head>
    <body>
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="{{url('/home')}}">
                        <img class="main-logo" src="{{asset('tablero/img/mesa33.png')}}" alt=""  width="160px" />
                    </a>
                    <strong>
                        <img src="{{asset('tablero/img/favicon.png')}}" alt="" width="35px" style="margin-top: 10px;"/>
                    </strong>
                </div>
                <div class="nalika-profile">
                    <div class="profile-dtl">
                        <a href="#">
                            <img src="{{asset('tablero/img/notification/4.jpg')}}" alt="" />
                        </a>
                        <h2>
                            <span class="min-dtn limitado">{{$datos_usuario->name}}</span>
                        </h2>
                    </div>
                    <div class="profile-social-dtl">
                        <ul class="dtl-social">
                            <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                            <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                            <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a class="" href="{{url('/home')}}">
                                    <i class="fa fa-home icon-wrap"></i>
                                    <span class="mini-click-non">Inicio</span>
                                </a> 
                            </li>
                            @if($datos_usuario -> roluser == 3)
                                <li class="">
                                    <a class="has-arrow" href="#">
                                        <i class="fa fa-envelope icon-wrap"></i>
                                        <span class="mini-click-non">Solicitudes</span>
                                    </a>
                                    <ul class="submenu-angle" aria-expanded="true">
                                        <li><a title="Opcion 1" href="{{url('/solicitarpipa')}}"><span class="mini-sub-pro">Solictar pipa</span></a></li>
                                        <!-- <li><a title="Opcion 2" href="{{url('/solicitudm')}}"><span class="mini-sub-pro">Solicitar material</span></a></li> -->
                                    </ul>
                                </li>
                            @else
                                @if($datos_usuario -> roluser == 4)
                                    <li class="">
                                        <a class="has-arrow" href="#">
                                            <i class="fa fa-envelope icon-wrap"></i>
                                            <span class="mini-click-non">Solicitudes</span>
                                        </a>
                                        <ul class="submenu-angle" aria-expanded="true">
                                            <li><a title="Opcion 3" href="{{url('/solicitud')}}"><span class="mini-sub-pro">Mis solicitudes</span></a></li>
                                        </ul>
                                    </li>
                                @endif
                            @endif
                            <!-- <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <i class="fa fa-file icon-wrap"></i>
                                    <span class="mini-click-non">Oficios</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Opcion 4" href="{{url('/oficios')}}"><span class="mini-sub-pro">Generar oficio</span></a></li>
                                    <li><a title="Opcion 5" href="{{url('/consulta')}}"><span class="mini-sub-pro">Mis oficios</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <i class="fa fa-check icon-wrap"></i>
                                    <span class="mini-click-non">Act. pendientes</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Opcion 7" href="{{url('/tablaoficios')}}"><span class="mini-sub-pro">Oficios</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="" href="{{url('/cronograma')}}">
                                    <i class="fa fa-pie-chart icon-wrap"></i>
                                    <span class="mini-click-non">Cronograma</span>
                                </a> 
                            </li>
                            <li>
                                <a class="" href="{{url('/tareas')}}">
                                    <i class="fa fa-list icon-wrap"></i>
                                    <span class="mini-click-non">Tareas</span>
                                </a> 
                            </li> -->
                            <li>
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="icon nalika-unlocked icon-wrap"></i>
                                    <span class="mini-click-non">Cerrar Sesión</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>

        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html">
                                <img class="main-logo" src="{{asset('tablero/img/mesa33.png')}}" alt=""  width="100px"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="icon nalika-menu-task"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n hd-search-rp">
                                                <div class="breadcome-heading">
                                                    <form role="search" class="">
                                                        <input type="text" placeholder="Buscar..." class="form-control">
                                                        <a href=""><i class="fa fa-search"></i></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item dropdown">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="icon nalika-mail" aria-hidden="true"></i>
                                                            <span class="indicator-ms"></span>
                                                        </a>
                                                        <div role="menu" class="author-message-top dropdown-menu animated">
                                                            <div class="message-single-top">
                                                                <h1>Mensajes</h1>
                                                            </div>
                                                            <ul class="message-menu">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="{{asset('tablero/img/contact/1.jpg')}}" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">29/Febrero</span>
                                                                            <h2>SmartSite</h2>
                                                                            <p>Por favor! Haz de este proyecto lo imposible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="{{asset('tablero/img/contact/4.jpg')}}" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16/Enero</span>
                                                                            <h2>Ayuntamiento</h2>
                                                                            <p>Por favor! Haz de este proyecto lo imposible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="message-view">
                                                                <a href="#">Ver todos los mensajes.</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                        <div role="menu" class="notification-author dropdown-menu animated">
                                                            <div class="notification-single-top">
                                                                <h1>Notificaciones</h1>
                                                            </div>
                                                            <ul class="notification-menu">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">29/Febrero</span>
                                                                            <h2>SmartSite</h2>
                                                                            <p>Haz recibido una nueva solicitud de oficio.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16/Febrero</span>
                                                                            <h2>Ayuntamiento</h2>
                                                                            <p>Haz recibido una nueva solicitud de oficio.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="notification-view">
                                                                <a href="#">Ver todas las notificaciones</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="icon nalika-user"></i>
                                                            <span class="admin-name">Opciones</span>
                                                            <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                        </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated">
                                                            <li>
                                                                <a href="#">
                                                                    <span class="icon nalika-user author-log-ic"></span> Mi perfil
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span class="icon nalika-settings author-log-ic"></span> Opciones
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Versión para moviles -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li>
                                                <a class="" href="{{url('/home')}}">
                                                    <i class="fa fa-home icon-wrap"></i>
                                                    <span class="mini-click-non">Inicio</span>
                                                </a> 
                                            </li>
                                            @if($datos_usuario -> roluser == 3)
                                                <li class="">
                                                    <a class="has-arrow" href="#">
                                                        <i class="fa fa-envelope icon-wrap"></i>
                                                        <span class="mini-click-non">Solicitudes</span>
                                                    </a>
                                                    <ul class="submenu-angle" aria-expanded="true">
                                                        <li><a title="Opcion 1" href="{{url('/solicitarpipa')}}"><span class="mini-sub-pro">Solictar pipa</span></a></li>
                                                        <!-- <li><a title="Opcion 2" href="{{url('/solicitudm')}}"><span class="mini-sub-pro">Solicitar material</span></a></li> -->
                                                    </ul>
                                                </li>
                                            @else
                                                @if($datos_usuario -> roluser == 4)
                                                    <li class="">
                                                        <a class="has-arrow" href="#">
                                                            <i class="fa fa-envelope icon-wrap"></i>
                                                            <span class="mini-click-non">Solicitudes</span>
                                                        </a>
                                                        <ul class="submenu-angle" aria-expanded="true">
                                                            <li><a title="Opcion 3" href="{{url('/solicitud')}}"><span class="mini-sub-pro">Mis solicitudes</span></a></li>
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endif
                                            <!-- <li>
                                                <a class="has-arrow" href="#" aria-expanded="false">
                                                    <i class="fa fa-file icon-wrap"></i>
                                                    <span class="mini-click-non">Oficios</span>
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="Opcion 4" href="{{url('/oficios')}}"><span class="mini-sub-pro">Generar oficio</span></a></li>
                                                    <li><a title="Opcion 5" href="{{url('/consulta')}}"><span class="mini-sub-pro">Mis oficios</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="#" aria-expanded="false">
                                                    <i class="fa fa-check icon-wrap"></i>
                                                    <span class="mini-click-non">Act. pendientes</span>
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="Opcion 7" href="{{url('/tablaoficios')}}"><span class="mini-sub-pro">Oficios</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="" href="{{url('/cronograma')}}">
                                                    <i class="fa fa-pie-chart icon-wrap"></i>
                                                    <span class="mini-click-non">Cronograma</span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a class="" href="{{url('/tareas')}}">
                                                    <i class="fa fa-list icon-wrap"></i>
                                                    <span class="mini-click-non">Tareas</span>
                                                </a> 
                                            </li> -->
                                            <li>
                                                <a class="" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    <i class="icon nalika-unlocked icon-wrap"></i>
                                                    <span class="mini-click-non">Cerrar Sesión</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-ctn">
                                                <h2>Oficios generados</h2>
                                                <p> <span class="bread-ntd">En emergencias contacte (123) 456 7890 o por messenger en facebook</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calender-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <img style="" src="images/headerformulario@2xrecortado.png"><br><br>
                                        <h4>Estado de solicitudes</h4><br>
                                    </div>
                                    <center>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-dark">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No. oficio</th>
                                                        <th scope="col">Usuario1</th>
                                                        <th scope="col">Usuario2</th>
                                                        <th scope="col">Estatus de aceptacion</th>
                                                        <th scope="col">Fecha de entrega</th>
                                                        <th scope="col">Fecha limite</th>
                                                        <th scope="col">Tiempo limite</th>
                                                        <th scope="col">Descargar formato</th>
                                                        <th scope="col">Opcion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($oficios as $oficio)
                                                        @if($oficio->usuario1_oficio == "No")
                                                            @if($datos_usuario -> roluser == "user1")
                                                                <tr>
                                                                    <td class="blanco">{{$oficio->numero_oficio}}</td>
                                                                    <td class="blanco">{{$oficio->usuario1_oficio}}</td>
                                                                    <td class="blanco">{{$oficio->usuario2_oficio}}</td>
                                                                    @if($oficio->estatus_acep_oficio == "Red")
                                                                        <td class="blanco"><i class="fa fa-circle" style="color:red;"></i> En espera</td>
                                                                    @else
                                                                        @if($oficio->estatus_acep_oficio == "Yellow")
                                                                            <td class="blanco"><i class="fa fa-circle" style="color:yellow;"></i> Autorizado</td>
                                                                        @else
                                                                            @if($oficio->estatus_acep_oficio == "Green")
                                                                                <td class="blanco"><i class="fa fa-circle" style="color:green;"></i> Entregado</td>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <td class="blanco">{{$oficio->fecha_entrega_oficio}}</td>
                                                                    <td class="blanco">{{$oficio->fecha_limite_oficio}}</td>
                                                                    @if($oficio->estatus_oficio == "1")
                                                                        <td>
                                                                            <div class="progress mb-2">
                                                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                                                            </div>
                                                                        </td>
                                                                    @else
                                                                        @if($oficio->estatus_oficio == "2")
                                                                            <td>
                                                                                <div class="progress mb-2">
                                                                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            @if($oficio->estatus_oficio == "3")
                                                                                <td>
                                                                                    <div class="progress mb-2">
                                                                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                @if($oficio->estatus_oficio == "4")
                                                                                    <td>
                                                                                        <div class="progress mb-2">
                                                                                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                                                                        </div>
                                                                                    </td>
                                                                                @else
                                                                                    @if($oficio->estatus_oficio == "5")
                                                                                        <td>
                                                                                            <div class="progress mb-2">
                                                                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                                            </div>
                                                                                        </td>
                                                                                    @else
                                                                                        @if($oficio->estatus_oficio == "Completo")
                                                                                            <td>
                                                                                                <div class="progress mb-2">
                                                                                                    <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Completado</div>
                                                                                                </div>
                                                                                            </td>
                                                                                        @endif
                                                                                    @endif
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <td>
                                                                        <center>
                                                                            <a type="button" class="btn btn-danger" href="{{ route('oficio_PDF', $oficio->id_oficio) }}" target="_blank">
                                                                            <i class="fa fa-file-text"></i> PDF</a>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        @switch($datos_usuario->roluser)
                                                                            @case("user1")
                                                                                @if($oficio->usuario1_oficio == "Si")
                                                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}" disabled>
                                                                                        <i class="fa fa-check"></i> Aceptado
                                                                                    </button>
                                                                                @else
                                                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}">
                                                                                        <i class="fa fa-check"></i> Aceptar
                                                                                    </button>
                                                                                @endif
                                                                            @break

                                                                            @case("user2")
                                                                                @if($oficio->usuario2_oficio == "Si")
                                                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}" disabled>
                                                                                        <i class="fa fa-check"></i> Aceptado
                                                                                    </button>
                                                                                @else
                                                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}">
                                                                                        <i class="fa fa-check"></i> Aceptar
                                                                                    </button>
                                                                                @endif
                                                                            @break

                                                                            @default
                                                                                
                                                                        @endswitch

                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="exampleModalCenter{{$oficio->id_oficio}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Confirmación de aceptación</h5>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        ¿Estas seguro que deseas aceptar y colocar tu firma a esta solicitud de oficio? <br>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <form method="POST" action="{{route('aceptaroficio')}}">
                                                                                            @csrf
                                                                                            <input type="hidden" name="aceptaroficio" value="Si">
                                                                                            <input type="hidden" name="id_oficio" value={{$oficio->id_oficio}}>
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                            <button type="submit" class="btn btn-success">Aceptar</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @else
                                                            @endif
                                                        @else
                                                            @if($oficio->usuario1_oficio == "Si")
                                                                @if($datos_usuario -> roluser == "user1" || $datos_usuario -> roluser == "user2")
                                                                    <tr>
                                                                        <td>{{$oficio->numero_oficio}}</td>
                                                                        <td>{{$oficio->usuario1_oficio}}</td>
                                                                        <td>{{$oficio->usuario2_oficio}}</td>
                                                                        @if($oficio->estatus_acep_oficio == "Red")
                                                                            <td><i class="fa fa-circle" style="color:red;"></i> En espera</td>
                                                                        @else
                                                                            @if($oficio->estatus_acep_oficio == "Yellow")
                                                                                <td><i class="fa fa-circle" style="color:yellow;"></i> Autorizado</td>
                                                                            @else
                                                                                @if($oficio->estatus_acep_oficio == "Green")
                                                                                    <td><i class="fa fa-circle" style="color:green;"></i> Entregado</td>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                        <td>{{$oficio->fecha_entrega_oficio}}</td>
                                                                        <td>{{$oficio->fecha_limite_oficio}}</td>
                                                                        @if($oficio->estatus_oficio == "1")
                                                                            <td>
                                                                                <div class="progress mb-2">
                                                                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            @if($oficio->estatus_oficio == "2")
                                                                                <td>
                                                                                    <div class="progress mb-2">
                                                                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                @if($oficio->estatus_oficio == "3")
                                                                                    <td>
                                                                                        <div class="progress mb-2">
                                                                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                                                        </div>
                                                                                    </td>
                                                                                @else
                                                                                    @if($oficio->estatus_oficio == "4")
                                                                                        <td>
                                                                                            <div class="progress mb-2">
                                                                                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                                                                            </div>
                                                                                        </td>
                                                                                    @else
                                                                                        @if($oficio->estatus_oficio == "5")
                                                                                            <td>
                                                                                                <div class="progress mb-2">
                                                                                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                                                </div>
                                                                                            </td>
                                                                                        @else
                                                                                            @if($oficio->estatus_oficio == "Completo")
                                                                                                <td>
                                                                                                    <div class="progress mb-2">
                                                                                                        <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Completado</div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            @endif
                                                                                        @endif
                                                                                    @endif
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                        <td>
                                                                            <center>
                                                                                <a type="button" class="btn btn-danger" href="{{ route('oficio_PDF', $oficio->id_oficio) }}" target="_blank">
                                                                                <i class="fa fa-file-text"></i> PDF</a>
                                                                            </center>
                                                                        </td>
                                                                        <td>
                                                                            <!-- Botón para disparar ventana de aceptación -->
                                                                            @switch($datos_usuario->roluser)
                                                                                @case("user1")
                                                                                    @if($oficio->usuario1_oficio == "Si")
                                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}" disabled>
                                                                                            <i class="fa fa-check"></i> Aceptado
                                                                                        </button>
                                                                                    @else
                                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}">
                                                                                            <i class="fa fa-check"></i> Aceptar
                                                                                        </button>
                                                                                    @endif
                                                                                @break

                                                                                @case("user2")
                                                                                    @if($oficio->usuario2_oficio == "Si")
                                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}" disabled>
                                                                                            <i class="fa fa-check"></i> Aceptado
                                                                                        </button>
                                                                                    @else
                                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$oficio->id_oficio}}">
                                                                                            <i class="fa fa-check"></i> Aceptar
                                                                                        </button>
                                                                                    @endif
                                                                                @break

                                                                                @default
                                                                            
                                                                            @endswitch

                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="exampleModalCenter{{$oficio->id_oficio}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLongTitle">Confirmación de aceptación</h5>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            ¿Estas seguro que deseas aceptar y colocar tu firma a esta solicitud de oficio? <br>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                            <form method="POST" action="{{route('aceptaroficio')}}">
                                                                                                @csrf
                                                                                                <input type="hidden" name="aceptaroficio" value="Si">
                                                                                                <input type="hidden" name="id_oficio" value={{$oficio->id_oficio}}>
                                                                                                <button type="submit" class="btn btn-success">Aceptar</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © 2022 <a href="https://smarsitecompany.com">SmartSite Company.</a> Todos los derechos reservados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jquery ============================================ -->
        <script src="{{asset('tablero/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS ============================================ -->
        <script src="{{asset('tablero/js/bootstrap.min.js')}}"></script>
        <!-- wow JS ============================================ -->
        <script src="{{asset('tablero/js/wow.min.js')}}"></script>
        <!-- price-slider JS ============================================ -->
        <script src="{{asset('tablero/js/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS ============================================ -->
        <script src="{{asset('tablero/js/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS ============================================ -->
        <script src="{{asset('tablero/js/owl.carousel.min.js')}}"></script>
        <!-- sticky JS ============================================ -->
        <script src="{{asset('tablero/js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS ============================================ -->
        <script src="{{asset('tablero/js/jquery.scrollUp.min.js')}}"></script>
        <!-- mCustomScrollbar JS ============================================ -->
        <script src="{{asset('tablero/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('tablero/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS ============================================ -->
        <script src="{{asset('tablero/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('tablero/js/metisMenu/metisMenu-active.js')}}"></script>
        <!-- sparkline JS ============================================ -->
        <script src="{{asset('tablero/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('tablero/js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <!-- calendar JS ============================================ -->
        <script src="{{asset('tablero/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset('tablero/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('tablero/js/calendar/fullcalendar-active.js')}}"></script>
        <!-- float JS ============================================ -->
        <script src="{{asset('tablero/js/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('tablero/js/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('tablero/js/flot/curvedLines.js')}}"></script>
        <script src="{{asset('tablero/js/flot/flot-active.js')}}"></script>
        <!-- plugins JS ============================================ -->
        <script src="{{asset('tablero/js/plugins.js')}}"></script>
        <!-- main JS ============================================ -->
        <script src="{{asset('tablero/js/main.js')}}"></script>
        <!-- Limita los caracteres a mostrar - 15 caracteres============ -->
        <script>
            function ellipsis_box(elemento, max_chars){
                limite_text = $(elemento).text();
                if (limite_text.length > max_chars)
                {
                    limite = limite_text.substr(0, max_chars)+" ...";
                    $(elemento).text(limite);
                }
            }
            $(function()
            {
                ellipsis_box(".limitado", 15);
            });
        </script>
    </body>
</html>