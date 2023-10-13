<nav id="mainnav-container">
    <div id="mainnav">


        <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
        <!--It will only appear on small screen devices.-->
        <!--================================
        <div class="mainnav-brand">
            <a href="index.html" class="brand">
                <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                <span class="brand-text">Nifty</span>
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>
        -->



        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <img class="img-circle img-md" src="{{ asset('img/avatar/1.png') }}"
                                    alt="Profile Picture">
                            </div>

                            @if (Route::has('login'))
                                @auth
                                    <p class="mnp-name">Hola, {{ \Illuminate\Support\Facades\Auth::user()->username }}</p>
                                    <span class="mnp-desc">{{ \Illuminate\Support\Facades\Auth::user()->email }}</span>
                                @else
                                    <p class="mnp-name">Hola, Invitado</p>
                                    <span class="mnp-desc">Solo invitado</span>
                                @endauth
                            @endif

                        </div>

                    </div>





                    <ul id="mainnav-menu" class="list-group">

                        <!--INICIO-->
                        <li @if ($page_menu == 'inicio') ? class="active-sub" @endif>
                            <a href="{{ route('inicio') }}">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">
                                    Inicio
                                </span>
                            </a>
                        </li>

                        @if (Route::has('login'))
                            @auth

                                <!--Category name-->
                                <li class="list-header">GENERAL</li>


                                <!--USUARIOS-->
                                <li @if ($page_menu == 'usuarios') ? class="active-sub" @endif>
                                    <a href="#">
                                        <i class="demo-pli-checked-user"></i>
                                        <span class="menu-title">Usuarios</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul @if ($page_menu == 'usuarios') ? class="collapse in" : class="collapse" @endif>
                                        <li @if ($page_submenu == 'usuarios') ? class="active-link" @endif><a
                                                href="{{ route('usuarios') }}">Usuarios</a></li>
                                        <li @if ($page_submenu == 'roles') ? class="active-link" @endif><a
                                                href="{{ route('roles') }}">Roles</a></li>
                                    </ul>
                                </li>

                                <li class="list-divider"></li>

                                <!--Category name-->
                                <li class="list-header">LETRAS</li>

                                <!--HIMNARIO-->
                                <li @if ($page_menu == 'himnario') ? class="active-sub" @endif>
                                    <a href="{{ route('himnario') }}">
                                        <i class="demo-pli-folder"></i>
                                        <span class="menu-title">
                                            Himnario Oficial
                                        </span>
                                    </a>
                                </li>

                                <!--CANCIONERO-->
                                <li @if ($page_menu == 'cancionero') ? class="active-sub" @endif>
                                    <a href="{{ route('cancionero') }}">
                                        <i class="demo-pli-folder"></i>
                                        <span class="menu-title">
                                            Cancionero
                                        </span>
                                    </a>
                                </li>

                                <!--AUTORES-->
                                <li @if ($page_menu == 'autores') ? class="active-sub" @endif>
                                    <a href="{{ route('autores') }}">
                                        <i class="demo-pli-find-user"></i>
                                        <span class="menu-title">
                                            Autores
                                        </span>
                                    </a>
                                </li>

                                <!--COROS-->
                                <li @if ($page_menu == 'coros') ? class="active-sub" @endif>
                                    <a href="#">
                                        <i class="demo-pli-folder-search"></i>
                                        <span class="menu-title">Coros</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul @if ($page_menu == 'coros') ? class="collapse in" : class="collapse" @endif>
                                        <li @if ($page_submenu == 'coros-avivamiento') ? class="active-link" @endif><a
                                                href="{{ route('coros/avivamiento') }}">Avivamiento</a></li>
                                        <li @if ($page_submenu == 'coros-adoracion') ? class="active-link" @endif><a
                                                href="{{ route('coros/adoracion') }}">Adoración</a></li>
                                    </ul>
                                </li>

                                <!--CADENAS-->
                                <li @if ($page_menu == 'cadenas') ? class="active-sub" @endif>
                                    <a href="#">
                                        <i class="demo-pli-folder-organizing"></i>
                                        <span class="menu-title">Cadenas de Coros</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul @if ($page_menu == 'cadenas') ? class="collapse in" : class="collapse" @endif>
                                        <li @if ($page_submenu == 'cadenas-avivamiento') ? class="active-link" @endif><a
                                                href="{{ route('cadenas/avivamiento') }}">Avivamiento</a></li>
                                        <li @if ($page_submenu == 'cadenas-adoracion') ? class="active-link" @endif><a
                                                href="{{ route('cadenas/adoracion') }}">Adoración</a></li>
                                    </ul>
                                </li>

                                <!--PREDICAS-->
                                <li @if ($page_menu == 'predica') ? class="active-sub" @endif>
                                    <a href="{{ route('predicas') }}">
                                        <i class="demo-pli-folder"></i>
                                        <span class="menu-title">
                                            Predicas
                                        </span>
                                    </a>
                                </li>

                                <li class="list-divider"></li>

                            @endauth
                        @endif

                        <!--Category name-->
                        <li class="list-header">WEB</li>

                        <!--HIMNARIO-->
                        <li @if ($page_menu == 'himnario-web') ? class="active-sub" @endif>
                            <a href="{{ route('public/himnario') }}">
                                <i class="demo-pli-folder"></i>
                                <span class="menu-title">
                                    Himnario Oficial
                                </span>
                            </a>
                        </li>


                        <!--CANCIONERO-->
                        <li @if ($page_menu == 'cancionero-web') ? class="active-sub" @endif>
                            <a href="{{ route('public/cancionero') }}">
                                <i class="demo-pli-folder"></i>
                                <span class="menu-title">
                                    Cancionero
                                </span>
                            </a>
                        </li>


                        <!--CADENAS-->
                        <li @if ($page_menu == 'cadenas-web') ? class="active-sub" @endif>
                            <a href="#">
                                <i class="demo-pli-folder-organizing"></i>
                                <span class="menu-title">Cadenas de Coros</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul @if ($page_menu == 'cadenas-web') ? class="collapse in" : class="collapse" @endif>
                                <li @if ($page_submenu == 'cadenas-avivamiento-web') ? class="active-link" @endif><a
                                        href="{{ route('public/cadenas/avivamiento') }}">Avivamiento</a></li>
                                <li @if ($page_submenu == 'cadenas-adoracion-web') ? class="active-link" @endif><a
                                        href="{{ route('public/cadenas/adoracion') }}">Adoración</a></li>
                            </ul>
                        </li>

                        <!--BIBLIAS-->
                        <li @if ($page_menu == 'biblias-web') ? class="active-sub" @endif>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span class="menu-title">Bíblias</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul @if ($page_menu == 'biblias-web') ? class="collapse in" : class="collapse" @endif>
                                <li @if ($page_submenu == 'biblia-web') ? class="active-link" @endif><a
                                        href="{{ route('public/biblias/biblia-rv1960') }}">Biblia RV-1960</a></li>
                                <li @if ($page_submenu == 'bible-web') ? class="active-link" @endif><a
                                        href="{{ route('public/biblias/holy-bible') }}">Holy Bible</a></li>
                            </ul>
                        </li>

                    </ul>



                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
