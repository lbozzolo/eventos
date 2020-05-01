@extends('web.layout-charla')

@section('content')


    @include('web.components.header-charla')


    <section class="blog blog-single pb-0 pt-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('vendor.flash.message')

                    <h4>
                        <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                        - {!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})
                    </h4>

                </div>
            </div>
        </div>
    </section>



    <section class="pb-40 pt-5">
        <div class="pl-5 pr-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

{{--                    @include('web.components.iframe-youtube')--}}
                    @include('web.components.iframe')

                </div>
                <div class="col-lg-12">
                    <div class="card card-body">
                        {!! Form::open(['url' => route('proyectos.store.message', $charla->id), 'method' => 'post', 'id' => 'form-consulta']) !!}
                        @if($charla->publico)
                        <div class="form-group">
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                        </div>
                        @endif
                        <div class="form-group">
                            {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => 6, 'placeholder' => 'Escriba aquí su consulta...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Enviar', ['class' => 'btn btn-outline-dark btn-xs', 'id' => 'btnSubmit']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
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

    <section class="pt-5 pb-5 pl-5 bg-celeste-oscuro text-white">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">

                    @if($charla->publico)
                        <span class="text-azul-claro">Este evento es público.</span>
                    @else
                        <span class="text-black">Estás inscripto a este evento.</span>
                    @endif

                    @include('web.components.info-evento')

                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-0 bg-celeste-claro text-azul-oscuro">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    @include('web.components.cerrar-sesion')
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')

    <script>

        $('.iframe-secondary').click(function () {

            let src = $(this).attr('data-url');

            console.log($(this).attr('src'));
            $('#iframe-primary').attr('src', src);

        });

        $("#btnSubmit").click(function () {
            setTimeout(function () { disableButton(); }, 0);
        });

        function disableButton() {
            $("#btnSubmit").prop('disabled', true);
        };


    </script>

@endsection