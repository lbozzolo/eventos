@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-dark-green lead">
                        Tu código ha sido verificado correctamente
                    </p>
                </div>
                <div class="col-lg-12">

                    {!! Form::open(['url' => route('web.login', $charla->id), 'method' => 'post', 'class' => 'contact__form-panel']) !!}


                        {!! csrf_field() !!}
                        {!! Form::hidden('code', $codigo) !!}

                        <div class="row">
                            <div class="col-lg-12">
                                @include('vendor.flash.message')
                            </div>
                            <div class="col-sm-12 contact__form-panel-header">
                                <p class="text-dark">Necesitamos enlazar tu código con tu identidad para que nadie pueda utilizarlo por vos.</p>

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="password" class="form-control" placeholder="DNI, pasaporte o ID">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <button type="submit" class="btn btn__primary btn__block">Siguiente</button>
                                {{--<h5 class="text-black" style="margin-top: 30px">--}}
                                    {{--¿Todavía no estás registrado?--}}
                                    {{--<a href="{!! route('web.charlas.registro', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug,  'id' => $charla->id]) !!}">registrarse</a>--}}
                                {{--</h5>--}}

                                <button title="Recuperar cuenta" type="button" data-toggle="modal"
                                        data-target="#recuperarCuenta" class="text-celeste-oscuro mt-2">
                                    ¿Problemas para ingresar?
                                </button>

                            </div>
                        </div>

                    {!! Form::close() !!}

                    {{--{!! Form::open(['url' => route('web.charlas.store.identificacion', ['id' => $charla->id]), 'method' => 'post', 'class' => 'contact__form-panel']) !!}--}}

                        {{--{!! Form::hidden('code', $codigo) !!}--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-lg-12">--}}
                                {{--@include('vendor.flash.message')--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-12 contact__form-panel-header">--}}
                                {{--<p class="text-dark">Necesitamos enlazar tu código con tu identidad para que nadie pueda utilizarlo por vos.</p>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6 col-md-6 col-lg-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus']) !!}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6 col-md-6 col-lg-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--{!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'DNI, pasaporte o ID']) !!}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-12 col-md-12 col-lg-4">--}}
                                {{--<button type="submit" class="btn btn__primary btn__block">Aceptar</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--{!! Form::close() !!}--}}

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