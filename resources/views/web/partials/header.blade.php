<header id="header" class="header">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
            <a class="navbar-brand" href="{!! route('home') !!}">
                <img src="{!! asset('images/logos/logo_eventum_chico.png') !!}" class="logo-light" alt="logo" >
                <img src="{!! asset('images/logos/logo_eventum_chico.png') !!}" class="logo-dark" alt="logo" >

                {{--<img src="{!! asset('images/logos/logo_eventum_transparente.png') !!}" class="logo-dark" alt="logo" height="140" style="display: inline-block; margin-bottom: 20px; margin-top: 20px">--}}

                {{--<img src="{!! asset('template-web/assets/images/logo/logo-light.png') !!}" class="logo-light" alt="logo">--}}
                {{--<img src="{!! asset('template-web/assets/images/logo/logo-dark.png') !!}" class="logo-dark" alt="logo">--}}
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__item with-dropdown">
                        <a href="{!! route('home') !!}" class="{{ Request::is('/') ? 'active' : '' }} dropdown-toggle nav__item-link">Home</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item with-dropdown">
                        <a href="{!! route('web.nosotros') !!}" class="{{ Request::is('nosotros*') ? 'active' : '' }} dropdown-toggle nav__item-link">Quiénes Somos</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item with-dropdown">
                        <a href="{!! route('web.charlas') !!}" class="{{ Request::is('eventos*') ? 'active' : '' }} dropdown-toggle nav__item-link">Eventos</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{!! route('web.contactanos') !!}" class="{{ Request::is('contactanos*') ? 'active' : '' }} nav__item-link">Contactanos</a>
                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            <div class="navbar-modules">
                <ul class="list-unstyled d-flex align-items-center modules__btns-list">

                    <li class="d-none d-lg-block">
                        <div class="module__btn module__btn-phone d-flex align-items-center">
                            <i class="icon-phone"></i>
                            <a href="tel:{!! config('sistema.data.phone') !!}">{!! config('sistema.data.phone') !!}</a>
                        </div>
                    </li>

                    @if(Auth::check())
                        @role('Inscripto|Superadmin')
                        <li class="d-none d-lg-block text-center nav_item">
                            <span class="nav__item-link" style="border-bottom: 1px solid white">{!! Auth::user()->fullname !!}</span><br>
                            {{--<a href="" class="btn btn-xs btn-outline-light">cerrar sesión</a>--}}

                            <a  class="dropdown-item text-celeste-oscuro" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-exit-to-app"></i>
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endrole
                    @else
                        <li class="d-none d-lg-block text-center nav-item">
                        <a  class="dropdown-item text-celeste-oscuro" href="{{ route('web.iniciar-sesion') }}">
                            <i class="mdi mdi-exit-to-app"></i>
                            Iniciar sesión
                        </a>
                        </li>
                    @endif


                </ul><!-- /.modules-wrapper -->
            </div><!-- /.navbar-modules -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header><!-- /.Header -->