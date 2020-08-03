@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="text-black" style="display: inline-block">
                        <span class="text-azul-claro">Ingresar</span>
                    </h2>
                    <p class="text-black lead">{!! $charla->cliente->nombre !!} - {!! $charla->nombre !!}</p>

                </div>
                <div class="col-lg-12">
                    @include('web.components.inicio-sesion')
                </div>
            </div>
        </div>
    </section>

    <section class="blog blog-single pb-0 pt-5" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('web.partials.auspiciantes')

                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                email: "soporte@eventum.com.ar", // Email
                call_to_action: "Eventum Soporte", // Call to action
                button_color: "#97B128", // Color of button
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

@endsection