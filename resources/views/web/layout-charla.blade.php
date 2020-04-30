<!DOCTYPE html>
<html lang="es">

<head>
    @include('web.partials.head')
</head>

<body>

<div class="wrapper">

    @yield('content')

    <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <a href="{!! route('home') !!}">
                                <img src="{!! asset('images/logos/logo_eventum_mono_light.png') !!}" alt="logo" height="140">
                            </a>
                        </div>
                        <div class="float-right">
                            <p>{!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})</p>
                            <a href="{!! route('home') !!}">eventum.com.ar</a>
                            <p class="mb-0"> &copy; 2020 Derechos en Trámite. Desarrollado por
                                <a href="http://verticedigital.com.ar/" target="_new">Vértice Digital</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

@include('web.partials.scripts')

</body>

</html>
