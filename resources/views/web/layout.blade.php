<!DOCTYPE html>
<html lang="es">

    <head>
        @include('web.partials.head')
    </head>

    <body>

        <div class="wrapper">

            @include('web.partials.header')

            @yield('content')

            @include('web.partials.footer')

            <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

            <div class="module__search-container">
                <i class="fa fa-times close-search"></i>
                <form class="module__search-form">
                    <input type="text" class="search__input" placeholder="Type Words Then Enter">
                    <button class="module__search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>

        @include('web.partials.scripts')

    </body>

</html>
