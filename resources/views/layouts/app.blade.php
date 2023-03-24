<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('/img/logosolo.png') }}" type="image/png">

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('template/plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('template/plugins/pace/pace.min.js') }}"></script>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('template/css/nifty.min.css') }}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('template/css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">

    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ asset('template/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!--=================================================-->

    <!--Toastr alertas-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!--Font-awesome-->
    <link href="{{ asset('template/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--select2-->
    <link href="{{ asset('template/plugins/select2/css/select2.min.css') }}" rel="stylesheet">


    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('template/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('template/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css') }}"
        rel="stylesheet">

    <!--summernote -->
    {{-- <link href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <style>
        #div_cargando {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            background: #0054A4;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(254, 254, 255, .65);
            z-index: 20000;
            display: none;

        }

        #div_cargando img {
            width: 70px;
            height: 70px;
        }

        .select2-container--default .select2-dropdown {
            z-index: 40000;
        }
    </style>

    <!--SECCION CSS DE CADA PAGINA-->
    @yield('page-css')


    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>

    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        <div id="div_cargando">
            <div>
                <img src="{{ asset('img/loading.svg') }}" alt="Cargando...">
            </div>
        </div>
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="{{ asset('img/logosolo.png') }}" alt="IeppManager" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">IeppManager</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->

                    </ul>


                    <ul class="nav navbar-top-links">


                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Perfil</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="demo-pli-gear icon-lg icon-fw"></i> Ajustes</a>
                                    </li>

                                    @if (Route::has('login'))
                                        @auth

                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();"><i
                                                        class="demo-pli-unlock icon-lg icon-fw"></i>
                                                    Cerrar Sesión</a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                                    class="d-none">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}"><i
                                                        class="demo-pli-unlock icon-lg icon-fw"></i>
                                                    Iniciar Sesión</a>
                                            </li>
                                        @endauth
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->



                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">


            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">



                <!--CONTENIDO DE CADA PAGINA-->
                <div id="page-head">

                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">@yield('title')</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="demo-pli-home"></i></a></li>
                        <li><a href="#">Inicio</a></li>
                        <li class="active">@yield('title')</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                    <!--CONTENIDO DE CADA PAGINA-->
                    @yield('content')

                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

            <!-- VARIABLES DE CADA PAGINA -->
            @yield('page-name')
            <!-- VARIABLES DE CADA PAGINA -->

            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            @include('layouts.nav')
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        @include('layouts.footer')
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    @yield('modals')


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ asset('template/js/nifty.min.js') }}"></script>

    <!--Switchery [ OPTIONAL ]-->
    <script src="{{ asset('template/plugins/switchery/switchery.min.js') }}"></script>

    <!--Toastr alertas-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!--select2s-->
    <script src="{{ asset('template/plugins/select2/js/select2.min.js') }}"></script>

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ asset('template/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}">
    </script>

    <!--summernote -->
    {{-- <script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- VARIABLE DE ENTORNO: AP URL PARA PETICIONES -->
    <script>
        const APP_URL = "{{ env('APP_URL') }}";
    </script>

    <script src="{{ asset('js-content/generales.js') }}"></script>

    <!-- JS DE CADA PAGINA -->
    @yield('page-js')




</body>

</html>
