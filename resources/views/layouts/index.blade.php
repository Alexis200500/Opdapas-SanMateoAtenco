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
    </head>
    <body>
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.html">
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
                            <span class="min-dtn">Emmanuel Campos</span>
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
                                <a class="" href="#">
                                    <i class="fa fa-home icon-wrap"></i>
                                    <span class="mini-click-non">Inicio</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="has-arrow" href="#">
                                    <i class="fa fa-envelope icon-wrap"></i>
                                    <span class="mini-click-non">Solicitudes</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Opcion 1" href="#"><span class="mini-sub-pro">Solictar pipa</span></a></li>
                                    <li><a title="Opcion 2" href="#"><span class="mini-sub-pro">Solicitar material</span></a></li>
                                    <li><a title="Opcion 3" href="#"><span class="mini-sub-pro">Mis solicitudes</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <i class="fa fa-file icon-wrap"></i>
                                    <span class="mini-click-non">Oficios</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Opcion 4" href="#"><span class="mini-sub-pro">Generar oficio</span></a></li>
                                    <li><a title="Opcion 5" href="#"><span class="mini-sub-pro">Mis oficios</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <i class="fa fa-check icon-wrap"></i>
                                    <span class="mini-click-non">Act. pendientes</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Opcion 7" href="#"><span class="mini-sub-pro">Oficios</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="fa fa-pie-chart icon-wrap"></i>
                                    <span class="mini-click-non">Cronograma</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="fa fa-list icon-wrap"></i>
                                    <span class="mini-click-non">Tareas</span>
                                </a>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="icon nalika-unlocked icon-wrap"></i>
                                    <span class="mini-click-non">Cerrar Sesión</span>
                                </a>
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
                                                            <li>
                                                                <a href="#"><span class="icon nalika-unlocked author-log-ic"></span> Cerrar Sesión
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
                                                <a class="" href="#">
                                                    <i class="fa fa-home icon-wrap"></i>
                                                    <span class="mini-click-non">Inicio</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class="has-arrow" href="#">
                                                    <i class="fa fa-envelope icon-wrap"></i>
                                                    <span class="mini-click-non">Solicitudes</span>
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="true">
                                                    <li><a title="Opcion 1" href="#"><span class="mini-sub-pro">Solictar pipa</span></a></li>
                                                    <li><a title="Opcion 2" href="#"><span class="mini-sub-pro">Solicitar material</span></a></li>
                                                    <li><a title="Opcion 3" href="#"><span class="mini-sub-pro">Mis solicitudes</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="#" aria-expanded="false">
                                                    <i class="fa fa-file icon-wrap"></i>
                                                    <span class="mini-click-non">Oficios</span>
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="Opcion 4" href="#"><span class="mini-sub-pro">Generar oficio</span></a></li>
                                                    <li><a title="Opcion 5" href="#"><span class="mini-sub-pro">Mis oficios</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="#" aria-expanded="false">
                                                    <i class="fa fa-check icon-wrap"></i>
                                                    <span class="mini-click-non">Act. pendientes</span>
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="Opcion 7" href="#"><span class="mini-sub-pro">Oficios</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="" href="#">
                                                    <i class="fa fa-pie-chart icon-wrap"></i>
                                                    <span class="mini-click-non">Cronograma</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="#">
                                                    <i class="fa fa-list icon-wrap"></i>
                                                    <span class="mini-click-non">Tareas</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="#">
                                                    <i class="icon nalika-unlocked icon-wrap"></i>
                                                    <span class="mini-click-non">Cerrar Sesión</span>
                                                </a>
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
                                                <h2>Titulo de la Pagina</h2>
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
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
    </body>
</html>
