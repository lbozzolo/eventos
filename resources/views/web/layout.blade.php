<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web.partials.head')
    </head>
    <body>



        <div id="preloader">
            <div id="status"><img src="{{ asset('template-web/images/black-logo.png') }}" alt="cargando contenido.."></div>
        </div>

        <div id="home" class="clearfix">

            @yield('content')

        </div>

        <footer>@include('web.partials.footer')</footer>

        @include('web.partials.scripts')

    </body>
</html>
