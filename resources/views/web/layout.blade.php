<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web.partials.head')
    </head>
    <body>

        @include('web.partials.header')

        @yield('content')

        <footer>
            @include('web.partials.footer')
        </footer>

        @include('web.partials.scripts')

    </body>
</html>
