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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="http://maps.google.com/maps/api/js?key=AIzaSyB6Xs0W2QYrqcUOXbnoH5kHo-9kuCntJYo"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>



        <style>
            label, h4{
                color: #C5C6C7;
            }
        </style>
        <style>
            label, h4{
                color: #C5C6C7;
            }

            #mymap {

border:1px solid red;

width: 800px;

height: 600px;

margin-left: auto;
margin-right: auto;

margin-top: 20px;

}

        </style>
    </head>
    <body>
        @include('sweetalert::alert')
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="{{url('home')}}">
                        <img class="main-logo" src="{{asset('tablero/img/mesa33.png')}}" alt=""  width="160px" />
                    </a>
                    <strong>
                        <img src="{{asset('tablero/img/favicon.png')}}" alt="" width="35px" style="margin-top: 10px;"/>
                    </strong>
                </div>
                <div class="nalika-profile">
                    <div class="profile-dtl">
                        <a href="{{ route ('perfiluser')}}">
                            <img src="{{ asset('archivos/'.$datos_usuario->foto_user) }}" alt="" />
                        </a>
                        <h2>
                            <span class="min-dtn limitado"><b>{{$datos_usuario->name}}</b></span><br>
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
                                <a class="" href="{{url('/perfiluser')}}">
                                    <i class="fa fa-user icon-wrap"></i>
                                    <span class="mini-click-non">Mi Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{url('/home')}}">
                                    <i class="fa fa-home icon-wrap"></i>
                                    <span class="mini-click-non">Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{url('/reporteusuarios')}}">
                                    <i class="fa fa-user icon-wrap"></i>
                                    <span class="mini-click-non">Usuarios</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{url('/reportepeticion')}}">
                                    <i class="fa fa-clipboard icon-wrap"></i>
                                    <span class="mini-click-non">Peticiones</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{url('/reporteformulario')}}">
                                    <i class="fa fa-book icon-wrap"></i>
                                    <span class="mini-click-non">Libro de Gobierno</span>
                                </a>
                            </li>
                             <li>
                                <a class="" href="{{url('/reporteficha')}}">
                                    <i class="fa fa-file icon-wrap"></i>
                                    <span class="mini-click-non">Fichas Usuarios</span>
                                </a>
                            </li>
                            @if($datos_usuario -> roluser == 3)
                                 <li>
                                <a class="" href="{{url('/reporteusers')}}">
                                    <i class="fa fa-user icon-wrap"></i>
                                    <span class="mini-click-non">Administradores</span>
                                </a>
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
                                                {{-- <div class="breadcome-heading">
                                                    <form role="search" class="">
                                                        <input type="text" placeholder="Buscar..." class="form-control">
                                                        <a href=""><i class="fa fa-search"></i></a>
                                                    </form>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                    {{-- <li class="nav-item">
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
                                                            </li> --}}
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
                            <li>
                                <a class="" href="{{url('/reporteusuarios')}}">
                                    <i class="fa fa-user icon-wrap"></i>
                                    <span class="mini-click-non">Usuario</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{url('/reportepeticion')}}">
                                    <i class="fa fa-clipboard icon-wrap"></i>
                                    <span class="mini-click-non">Peticiones</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{url('/reporteformulario')}}">
                                    <i class="fa fa-book icon-wrap"></i>
                                    <span class="mini-click-non">Libro de Gobierno</span>
                                </a>
                            </li>
                            @if($datos_usuario -> roluser == 3)
                                 <li>
                                <a class="" href="{{url('/reporteusers')}}">
                                    <i class="fa fa-user icon-wrap"></i>
                                    <span class="mini-click-non">Administradores</span>
                                </a>
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
<div class="calender-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                             <div class="card-header">
                                                <h4>Modificación de usuario</h4><hr>
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
                                        <form method="POST" enctype="multipart/form-data" action="{{ route ('cambiousuario') }}">
                                            @csrf
                                            <div class="card">

                                                            <input type="hidden" class="form-control" name="id" value="{{$usuarios->id}}" required>

                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Nombre (s)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                            <input class="form-control" name="nombre" value="{{$usuarios->nombre}}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                                    <label class=" form-control-label">Imagen </label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-image"></i></div>
                                                                        <input type="file" class="form-control" name="image" >
                                                                    </div>
                                                                </div>
                                                                <div class="profile">
                                                        <a href="#">
                                                            <img src="{{ asset('archivos/'.$usuarios->image) }}" alt="" width="100" height="100" />
                                                        </a>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class=" form-control-label">Fecha de Nacimiento</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            <input type="date" class="form-control" name="fecha_n" value="{{$usuarios->fecha_n}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Edad</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                            <input class="form-control" value="{{$usuarios->edad}}" name="edad" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Sexo</label>
                                                        <div class="input-group">
                                                            <div class="form-check form-check-inline">
                                                                @if($usuarios->sexo=='Masculino')
                                                                <input type="radio" name="sexo" value="Masculino" required checked="">
                                                                <label class="form-check-label" for="inlineRadio1" >Masculino</label>

                                                                <input type="radio" name="sexo" value="Femenino" required>
                                                                <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                                @else
                                                                <input type="radio" name="sexo" value="Masculino" required>
                                                                <label class="form-check-label" for="inlineRadio1" >Masculino</label>

                                                                <input type="radio" name="sexo" value="Femenino" required checked="">
                                                                <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Correo electronico</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                            <input type="email" class="form-control" value="{{$usuarios->email}}" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Telefono de casa</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                            <input class="form-control" value="{{$usuarios->num_casa}}" name="num_casa" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Telefono celular</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                            <input class="form-control" value="{{$usuarios->celular}}" name="celular" required>
                                                        </div>
                                                    </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label" >Calle</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                                                <input class="form-control" value="{{$usuarios->calle}}" name="calle" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class=" form-control-label">Barrio.</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                    <select class="form-control" tabindex="1" name="id_barrio" required>
                                                                        <option disabled>Selecciona una opción.</option>
                                                                        @foreach ($barrios as $barrio)
                                                                        @if ($barrio->id_barrio == $usuarios->id_barrio )
                                                                            <option value={{ $barrio->id_barrio }} selected>{{ $barrio->nombre_barrio}}</option>

                                                                            @else
                                                                            <option value={{ $barrio->id_barrio }}>{{ $barrio->nombre_barrio}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                            <label class=" form-control-label">Número de Domicilio</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                                                <input class="form-control" value="{{$usuarios->num_dom}}" name="num_dom" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="card">

                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <label class=" form-control-label" >Numero de Inmueble</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                                <input class="form-control" value="{{$usuarios->num_inmueble}}" name="num_inmueble" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Status</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                    <select class="form-control" tabindex="1" name="status" required>
                                                                        <option value="{{$usuarios->status}}">{{$usuarios->status}}</option>
                                                                        <option value="Activo">Activo</option>
                                                                        <option value="Inactivo">Inactivo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Estado civil</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                    <select class="form-control" tabindex="1" name="estado_civil" required>
                                                                        <option value="{{$usuarios->estado_civil}}">{{$usuarios->estado_civil}}</option>
                                                                        <option value="Casado">Casado</option>
                                                                        <option value="Divorciado">Divorciado</option>
                                                                        <option value="Viudo">Viudo</option>
                                                                        <option value="Soltero">Soltero</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Tipo de Inmueble</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-map-signs"></i></div>
                                                                    <select class="form-control" tabindex="1" name="tipo_inm" required>
                                                                        <option value="{{$usuarios->tipo_inm}}">{{$usuarios->tipo_inm}}</option>
                                                                        <option value="Casa">Casa</option>
                                                                        <option value="Negocio">Negocio</option>
                                                                        <option value="Empresa">Empresa</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Observación</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                                                <input class="form-control" name="observacion" value="{{$usuarios->observacion}}" required> </input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label" >Curp</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                                                <input class="form-control"  name="curp" value="{{$usuarios->curp}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label" >RFC</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                                                <input class="form-control"  name="rfc" value="{{$usuarios->rfc}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label" >Google</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-google"></i></div>
                                                                <input class="form-control"  name="google" value="{{$usuarios->google}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label" >Facebook</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                                                <input class="form-control"  name="facebook" value="{{$usuarios->facebook}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                    <label class=" form-control-label">Ine </label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-image"></i></div>
                                                                        <input type="file" class="form-control" name="ine" >

                                                                    </div>
                                                                    <div class="profile">
                                                                <a href="{{ asset('archivos/'.$usuarios->ine) }}">
                                                                    <img src="{{ asset('archivos/'.$usuarios->ine) }}" alt="" width="100" height="100" />
                                                                </a>
                                                                </div>
                                                            </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class=" form-control-label">Comprobante de Domicilio </label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-image"></i></div>
                                                                        <input type="file" class="form-control" name="comdom" >
                                                                    </div>
                                                                    <div class="profile">
                                                                <a href="{{ asset('archivos/'.$usuarios->comdom) }}">
                                                                    <img src="{{ asset('archivos/'.$usuarios->comdom) }}" alt="" width="100" height="100" />
                                                                </a>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                            <button type="submit" class="btn btn-primary btn-md btn-block">Modificar</button>

                                                            </div>
                                                        </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="mymap"></div>
                        </div>
                    </div>
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

{{-- MAPA --}}


<script type="text/javascript">



    var locations = <?php print_r(json_encode($locations)) ?>;



    var mymap = new GMaps({

      el: '#mymap',

      lat: 19.2630031, lng: -99.5324296,

      zoom:16

    });



    $.each( locations, function( index, value ){

	    mymap.addMarker({

	      lat: value.latitud,

	      lng: value.longitud,

	      title: value.calle2,

	      click: function(e) {

	        alert('La calle:'+value.calle+', San Mateo Atenco.');

	      }

	    });

   });



  </script>




{{-- MAPA --}}


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
