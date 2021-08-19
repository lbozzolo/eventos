@extends('layouts.app')

@section('content')

    <div class="row grid-margin">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <h2>{!! $item->nombre !!} / <span class="text-warning">Iframes</span></h2>
                </div>

                <div class="card-body">
                    {!! Form::open(['url' => route($modelPlural.'.store.iframes', $item->id), 'method' => 'post']) !!}

                        <div class="form-group mt-4 mb-5">
                            {!! Form::label('type', 'Tipo de iframe') !!}<br>
                            <span class="mr-3"> {!! Form::radio('type', 0, true, ['id' => 'stweb']) !!} STWEB</span>
                            <span class="mr-3">{!! Form::radio('type', 1, false, ['id' => 'youtube']) !!} Youtube</span>
                            <span class="mr-3">{!! Form::radio('type', 2, false, ['id' => 'vimeo']) !!} Vimeo</span>
                        </div>

                        <div class="form-group">
                            {!! Form::label('title', 'Título o descripción') !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'SALA 1 / SALA 2 . . .']) !!}
                        </div>

                        <div class="form-group"  id="videos-input">
                            {!! Form::label('iframe', 'URL del iframe de la charla', ['id' => 'label-videos']) !!}
                            {!! Form::text('path', null, ['class' => 'form-control', 'id' => 'input-videos', 'placeholder' => 'Coloque aquí la URL de su video...']) !!}
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Aceptar</button>
                            <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>

    </div>

    <div class="row grid-margin">
        @forelse($item->iframes as $video)

            <div class="col-lg-4">
                <div class="card card-body mb-3">
                    @if($video->insecureURL())
                    <p class="bg-danger" style="padding: 5px 10px; border-radius: 5px">
                        <span class="text-white">LA URL DE ESTE IFRAME NO ES SEGURA</span><br>
                        <span class="text-warning">El sistema podría bloquearla y traer problemas de reproducción</span>
                    </p>
                    @endif
                    <p>{!! ($video->title)? $video->title : '[SIN TÍTULO]' !!}</p>

                    @if($video->type == 1)

                        <div class="video-responsive">
                            <iframe
                                    src="https://www.youtube.com/embed/{!! $video->video_id !!}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    class="video-responsive-item"
                                    allowfullscreen>
                            </iframe>
                            {{--<iframe--}}
                                    {{--id="video_primary"--}}
                                    {{--src="https://www.youtube.com/embed/{!! $video->video_id !!}"--}}
                                    {{--frameborder="0"--}}
                                    {{--allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
                                    {{--class="iframe"--}}
                                    {{--allowfullscreen>--}}
                            {{--</iframe>--}}
                        </div>

                    @elseif($video->type == 2)

                        <div class="video-responsive">
                            <iframe class="video-responsive-item" src="https://player.vimeo.com/video/{!! $video->path !!}" frameborder="0" title="" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                        </div>

                        @else

                        <div class="video-responsive">
                            <iframe src="{!! $video->path !!}" style="width: 100%; height: 370px"></iframe>
                        </div>

                    @endif

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <button class="btn btn-danger d-inline-block" title="Eliminar video" data-toggle="modal" data-target="#modalDeleteVideo{!! $video->id !!}">Eliminar</button>
                            <button class="btn btn-primary d-inline-block" title="Editar video" data-toggle="modal" data-target="#modalEditVideo{!! $video->id !!}">Editar</button>
                            <a href="{!! $video->path !!}" class="btn btn-secondary" target="_blank">Ver</a>
                        </div>
                    </div>

                </div>
            </div>

        @empty

            <div class="col-lg-12">
                <div class="card card-body">
                    <p class="text-muted"><i class="fa fa-meh-o"></i> <small><em>No hay iframes en este proyecto.</em></small> </p>
                </div>
            </div>

        @endforelse
    </div>




    @foreach($item->iframes as $video)

        <div class="modal fade" id="modalDeleteVideo{!! $video->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar iframe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿Desea eliminar el iframe seleccionado?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                        {!! Form::open(['method' => 'DELETE', 'url' => route('proyectos.iframes.destroy', ['proyecto' => $item->id, 'iframe' => $video->id])]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalEditVideo{!! $video->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Editar iframe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {!! Form::open(['method' => 'PATCH', 'url' => route('proyectos.iframes.update', $video->id)]) !!}

                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Título o descripción') !!}
                            {!! Form::text('title', $video->title, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('path', 'URL') !!}
                            {!! Form::text('path', $video->path, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    @endforeach

@endsection

@section('js')

    <script>

        $('#vimeo').click(function () {

            $('#input-videos').attr('placeholder', 'Coloque aquí el ID de su video (ej: 548901118)...');
            $('#input-videos').val('');
            $('#label-videos').text('ID del video de Vimeo');

        });

        $('#youtube').click(function () {

            $('#input-videos').attr('placeholder', 'Coloque aquí la URL de su video...');
            $('#input-videos').val('');
            $('#label-videos').text('URL del iframe de la charla');

        });

        $('#stweb').click(function () {

            $('#input-videos').attr('placeholder', 'Coloque aquí la URL de su video...');
            $('#input-videos').val('');
            $('#label-videos').text('URL del iframe de la charla');

        });



    </script>

@endsection