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

                        <!--Category name-->
                        <li class="list-header">GENERAL</li>

                        <!--INICIO-->
                        <li @if ($page_menu == 'inicio') ? class="active-sub" @endif>
                            <a href="{{ route('inicio') }}">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">
                                    Inicio
                                </span>
                            </a>
                        </li>

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
                                        href="{{ route('usuarios') }}">Avivamiento</a></li>
                                <li @if ($page_submenu == 'coros-adoracion') ? class="active-link" @endif><a
                                        href="{{ route('roles') }}">Adoración</a></li>
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
                                        href="{{ route('usuarios') }}">Avivamiento</a></li>
                                <li @if ($page_submenu == 'cadenas-adoracion') ? class="active-link" @endif><a
                                        href="{{ route('roles') }}">Adoración</a></li>
                            </ul>
                        </li>






                        <li class="list-divider"></li>

                        <!--Category name-->
                        <li class="list-header">More</li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-computer-secure"></i>
                                <span class="menu-title">App Views</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="app-file-manager.html">File Manager</a></li>
                                <li><a href="app-users.html">Users</a></li>
                                <li><a href="app-users-2.html">Users 2</a></li>
                                <li><a href="app-profile.html">Profile</a></li>
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-taskboard.html">Taskboard</a></li>
                                <li><a href="app-chat.html">Chat</a></li>
                                <li><a href="app-contact-us.html">Contact Us</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-speech-bubble-5"></i>
                                <span class="menu-title">Blog Apps</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-list-2.html">Blog List 2</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li class="list-divider"></li>
                                <li><a href="blog-manage-posts.html">Manage Posts</a></li>
                                <li><a href="blog-add-edit-post.html">Add Edit Post</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-mail"></i>
                                <span class="menu-title">Email</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="mailbox.html">Inbox</a></li>
                                <li><a href="mailbox-message.html">View Message</a></li>
                                <li><a href="mailbox-compose.html">Compose Message</a></li>
                                <li><a href="mailbox-templates.html">Email Templates</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-file-html"></i>
                                <span class="menu-title">Other Pages</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="pages-blank.html">Blank Page</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-search-results.html">Search Results</a></li>
                                <li><a href="pages-faq.html">FAQ</a></li>
                                <li><a href="pages-pricing.html">Pricing<span
                                            class="label label-success pull-right">New</span></a></li>
                                <li class="list-divider"></li>
                                <li><a href="pages-404-alt.html">Error 404 alt</a></li>
                                <li><a href="pages-500-alt.html">Error 500 alt</a></li>
                                <li class="list-divider"></li>
                                <li><a href="pages-404.html">Error 404 </a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-password-reminder.html">Password Reminder</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-photo-2"></i>
                                <span class="menu-title">Gallery</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="gallery-columns.html">Columns</a></li>
                                <li><a href="gallery-justified.html">Justified</a></li>
                                <li><a href="gallery-nested.html">Nested</a></li>
                                <li><a href="gallery-grid.html">Grid</a></li>
                                <li><a href="gallery-carousel.html">Carousel</a></li>
                                <li class="list-divider"></li>
                                <li><a href="gallery-slider.html">Slider</a></li>
                                <li><a href="gallery-default-theme.html">Default Theme</a></li>
                                <li><a href="gallery-compact-theme.html">Compact Theme</a></li>
                                <li><a href="gallery-grid-theme.html">Grid Theme</a></li>

                            </ul>
                        </li>


                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-tactic"></i>
                                <span class="menu-title">Menu Level</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li class="list-divider"></li>
                                <li>
                                    <a href="#">Third Level<i class="arrow"></i></a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Third Level<i class="arrow"></i></a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="list-divider"></li>

                        <!--Category name-->
                        <li class="list-header">Extras</li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-happy"></i>
                                <span class="menu-title">Icons Pack</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                <li><a href="icons-themify.html">Themify</a></li>
                                <li><a href="icons-font-awesome.html">Font Awesome</a></li>
                                <li><a href="icons-flagicons.html">Flag Icon CSS</a></li>
                                <li><a href="icons-weather-icons.html">Weather Icons</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-medal-2"></i>
                                <span class="menu-title">
                                    PREMIUM ICONS
                                    <span class="label label-danger pull-right">BEST</span>
                                </span>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="premium-line-icons.html">Line Icons Pack</a></li>
                                <li><a href="premium-solid-icons.html">Solid Icons Pack</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="helper-classes.html">
                                <i class="demo-pli-inbox-full"></i>
                                <span class="menu-title">Helper Classes</span>
                            </a>
                        </li>
                    </ul>



                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
