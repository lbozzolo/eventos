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

                        {!! Form::hidden('proyecto_id', $charla->id) !!}
                        <div class="form-group">

                            <div id="error"></div>

                            <div id="message"></div>


                            <div class="text-success" id="table" style="display: none;"></div>
                        </div>
                        @if($charla->publico)
                        <div class="form-group">
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nombre']) !!}
                        </div>
                        @endif
                        <div class="form-group">
                            {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => 6, 'placeholder' => 'Escriba aquí su consulta...', 'id' => 'texto']) !!}
                        </div>
                        <div class="form-group">
{{--                            {!! Form::submit('Enviar', ['class' => 'btn btn-outline-dark btn-xs', 'id' => 'btnSubmit']) !!}--}}
                            <button type="button" id="btnSubmit" class="btn btn-outline-dark btn-xs">Enviar</button>
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


        $("#btnSubmit").click(function() {

            $.ajax({
                type: 'post',
                url: '{!! route('proyectos.store.consulta') !!}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'nombre': $('input[name=nombre]').val(),
                    'texto': $('#texto').val(),
                    'proyecto_id': $('input[name=proyecto_id]').val(),
                },
                success: function(data) {
                    if ((data.errors)) {

                        $('#message').text('');
                        $('#box-message').hide();
                        $('#error').html(
                            '<div class="alert alert-danger alert-dismissible" id="box-error">' +
                            '<button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>' +
                                data.errors +
                            '</div>');
                        $("#btnSubmit").prop('disabled', false);

                    } else {

                        $('#error').text('');
                        $('#box-error').hide();
                        $('#message').html(
                            '<div class="alert alert-success alert-dismissible" id="box-message">' +
                            '<button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>' +
                             'Consulta realizada exitosamente' +
                            '</div>');

                        $('#nombre').val('');
                        $('#texto').val('');
                        $("#btnSubmit").prop('disabled', false);

                    }
                },
            });


        });


    </script>

@endsection