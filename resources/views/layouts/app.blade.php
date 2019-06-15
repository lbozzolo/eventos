<!DOCTYPE html>
<html lang="en">

    <head>

        @include('layouts.partials.htmlheader')

    </head>
    <body>

        @include('layouts.partials.navbar')

        <div class="container-fluid page-body-wrapper">

            @include('layouts.partials.sidebar')

            <div class="main-panel">

                <div class="content-wrapper">

                    @include('vendor.flash.message')
                    @yield('content')

                </div>

                @include('layouts.partials.footer')

            </div>

        </div>

    @include('layouts.partials.scripts')

    </body>

</html>