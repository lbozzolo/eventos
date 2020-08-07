@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    <section class="blog blog-single pb-0 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('vendor.flash.message')

                </div>
            </div>
        </div>
    </section>

    @if(\Carbon\Carbon::now()->addHours(1)->format('Y-m-d H:i') >= $charla->fecha_formatted_view)

        <section class="pb-40 pt-2">
            <div class="pl-2 pr-2">
                <div class="row">
                    <div class="container">
                        <h3>
                            <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                            - {!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})
                        </h3>
                    </div>
                </div>
            </div>
        </section>

    @endif

    @if(\Carbon\Carbon::now()->addHours(1)->format('Y-m-d H:i') >= $charla->fecha_formatted_view)

        @if($charla->encuestas->count())
        <section class="pb-40 pt-0">
            <div class="pl-2 pr-2">
                <div class="row">
                    <div class="container">

                        @foreach($charla->encuestas as $encuesta)
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">

                                    <div class="card card-body" style="padding-left:40px">
                                        <h4>{!! $encuesta->nombre !!}</h4>
                                        {!! Form::open(['url' => route('web.encuestas.responder', $encuesta->id), 'method' => 'post']) !!}

                                            {!! Form::hidden('user_id', Auth::user()->id) !!}
                                            @foreach($encuesta->preguntas as $pregunta)


                                                <div class="">
                                                    <div class="card-body">
                                                        <p class="lead text-dark-green">{!! $pregunta->descripcion !!}</p>
                                                        <ul class="list-unstyled">
                                                            @foreach($pregunta->opciones as $opcion)
                                                                @if($pregunta->clase == 0)
                                                                    <li class="list-group-item">
                                                                        {!! Form::label($pregunta->id, $opcion->descripcion) !!}
                                                                        <span class="float-right">{!! Form::checkbox($pregunta->id.'[]', $opcion->id) !!}</span>
                                                                    </li>
                                                                @elseif($pregunta->clase == 1)
                                                                    <li class="list-group-item">
                                                                        {!! Form::label($pregunta->id, $opcion->descripcion) !!}
                                                                        <span class="float-right">{!! Form::radio($pregunta->id, $opcion->id) !!}</span>
                                                                    </li>
                                                                @endif

                                                            @endforeach
                                                            @if($pregunta->clase == 2)
                                                                <div class="form-group">
                                                                    {!! Form::textarea($pregunta->id, null, ['class' => 'form-control', 'rows' => '4']) !!}
                                                                </div>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>


                                            @endforeach

                                             <div class="form-group">
                                                {!! Form::submit('Enviar', ['class' => 'btn btn__primary btn__bordered module__btn-request']) !!}
                                             </div>

                                        {!! Form::close() !!}
                                    </div>

                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endif

    @endif

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

                    @if($charla->tipoProyecto() == 'Público')
                        <span class="text-azul-claro">Este evento es público.</span>
                    @else

                        @if(\Carbon\Carbon::now()->format('Y-m-d H:i') < $charla->fecha_completa->addHours($charla->addHours)->format('Y-m-d H:i') && !$charla->videos->count())
                            <span class="text-black">Estás inscripto a este evento.</span>
                        @else
                            <span class="text-black">Asististe a este evento.</span>
                        @endif

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