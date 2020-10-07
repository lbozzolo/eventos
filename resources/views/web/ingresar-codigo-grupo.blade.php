@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="text-black" style="display: inline-block">
                        <span class="text-azul-claro">Ingresar código de acceso</span>
                    </h2>
                    <p class="text-black lead">{!! ($charla->cliente)? $charla->cliente->nombre.' - ' : ''  !!}  {!! ($charla->grupos->first())? $charla->grupos->first()->nombre : '' !!}</p>

                </div>
                <div class="col-lg-12">

                    {!! Form::open(['url' => route('web.charlas.check.codigo.grupo', ['id' => $id]), 'method' => 'post', 'class' => 'contact__form-panel']) !!}


                        <div class="row">
                            <div class="col-lg-12">
                                @include('vendor.flash.message')
                            </div>
                            <div class="col-sm-12 contact__form-panel-header">
                                <p class="lead">Ingresá tu código de acceso de 8 dígitos.</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="form-group">
                                    {!! Form::text('code', old('code'), ['class' => 'form-control', 'autofocus', 'placeholder' => 'Código']) !!}
                                </div>
                                {{--<div class="form-group">--}}
                                {{--{!! Recaptcha::render() !!}--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <button type="submit" class="btn btn__primary btn__block">Siguiente</button>
                            </div>
                        </div>

                    {!! Form::close() !!}

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