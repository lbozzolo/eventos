@extends('web.layout-charla')

@section('css')

    <style type="text/css">

        .material {
            border: 1px solid #17BDC5!important;
        }

        .material_title {
            font-family: "Teko", sans-serif;
            font-weight: 500;
            font-size: 22px;
            line-height: 1;
            cursor: pointer;
            display: block;
            position: relative;
            padding-right: 25px;
            color: #17BDC5;
        }


    </style>

@endsection

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
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <h3>
                                <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                                - {!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})
                            </h3>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-6">
                            <h4>Sala de posters</h4>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            {!! Form::open(['url' => route('web.material.search', $charla->id), 'method' => 'get', 'class' => 'form-inline']) !!}

                            {!! Form::hidden('comision_id', $comision) !!}
                            {!! Form::text('search', null, ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Buscar...', 'style' => 'width: 280px']) !!}
                            <button class="ml-3" type="submit" style="cursor: pointer"><i class="fa fa-search"></i> </button>


                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
            </div>
        </section>

    @endif

    @if(\Carbon\Carbon::now()->addHours(1)->format('Y-m-d H:i') >= $charla->fecha_formatted_view)

        @if($charla->materiales->count())
            <section class="pb-40 pt-0">
                <div class="pl-2 pr-2">
                    <div class="container">
                        <div class="row">

                            @if(isset($items))

                                @forelse($items as $material)
                                    @if($material->comision_id == $comision)
                                    <div class="col-lg-6">
                                        @include('web.components.material-card')
                                    </div>
                                    @endif
                                @empty
                                    <div class="col-lg-12">
                                        <p>No se encontraron resultados</p>
                                    </div>
                                @endforelse

                                @if($items instanceof \Illuminate\Pagination\LengthAwarePaginator )
                                    <div class="col-lg-12">
                                        <div class="card-body text-center customed-pagination">
                                            {!! $items->appends(request()->input())->render() !!}
                                        </div>
                                    </div>
                                @endif

                            @else

                                @foreach($charla->materiales()->where('comision_id', $comision)->paginate(4) as $material)
                                    <div class="col-lg-6">
                                        @include('web.components.material-card')
                                    </div>
                                @endforeach

                                @if($charla->materiales()->where('comision_id', $comision)->paginate(4) instanceof \Illuminate\Pagination\LengthAwarePaginator )
                                    <div class="col-lg-12">
                                        <div class="card-body text-center customed-pagination">
                                            {!! $charla->materiales()->where('comision_id', $comision)->paginate(5)->appends(request()->input())->render() !!}
                                        </div>
                                    </div>
                                @endif

                            @endif

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

@section('js')

    <script>

        $('.form-encuesta').submit(function(){
            $('.enviar-encuesta').attr('disabled', true);
        });

    </script>

@endsection