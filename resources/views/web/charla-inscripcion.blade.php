@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="col-lg-12">
            @include('web.components.cerrar-sesion')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="text-black">
                        <span class="text-azul-claro">Inscripción</span>
                         - {!! $charla->nombre !!} / {!! $charla->cliente->nombre !!}
                    </h2>

                </div>
                <div class="col-lg-12">
                    <form class="contact__form-panel" action="{{ route('web.login', $charla->id) }}" method="post">

                        {!! csrf_field() !!}

                        <div class="row">
                            <div class="col-lg-12">
                                @include('vendor.flash.message')
                            </div>
                            <div class="col-sm-12 contact__form-panel-header">
                                {{--<h4 class="text-warning">Inscripción</h4>--}}
                                <p class="lead">Ingresá tu usuario y contraseña para inscribirte.</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Usuario" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="*********">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <button type="submit" class="btn btn__primary btn__block">Ingresar</button>
                                <h5 class="text-black" style="margin-top: 30px">
                                    ¿Todavía no estás registrado?
                                    <a href="{!! route('web.charlas.registro', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}">regitrarse</a>
                                </h5>
                            </div>
                        </div>

                    </form>
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