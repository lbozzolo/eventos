@extends('layouts.app')

@section('content')

    <div class="row grid-margin">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <h2>{!! $item->nombre !!} / <span class="text-warning">Videos</span></h2>
                </div>

                <div class="card-body">
                    {!! Form::open(['url' => route($modelPlural.'.store.videos', $item->id), 'method' => 'post']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Título o descripción') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group"  id="videos-input">
                        {!! Form::label('path', 'URL del video del evento') !!}

                        {!! Form::text('path', null, ['class' => 'form-control', 'placeholder' => 'Coloque aquí la URL de su video...']) !!}

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Aceptar</button>
                        <a href="{!! route($modelPlural.'.edit', $item->id) !!}" class="btn btn-secondary">Cancelar</a>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>

    </div>

    <div class="row grid-margin">
        @forelse($item->videos as $video)

            <div class="col-lg-3">
                <div class="card card-body">
                    <p>{!! ($video->title)? $video->title : '[SIN TÍTULO]' !!}</p>
                    <img src="https://img.youtube.com/vi/{!! $video->video_id !!}/default.jpg" style="width: 100%"><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-danger d-inline-block" title="Eliminar video" data-toggle="modal" data-target="#modalDeleteVideo{!! $video->id !!}">Eliminar</button>
                            <a href="{!! $video->path !!}" class="btn btn-secondary" target="_blank">Ver</a>
                        </div>
                    </div>

                </div>
            </div>

        @empty

            <div class="col-lg-12">
                <div class="card card-body">
                    <p class="text-muted"><i class="fa fa-meh-o"></i> <small><em>No hay videos en este proyecto.</em></small> </p>
                </div>
            </div>

        @endforelse
    </div>




    @foreach($item->videos as $video)

        <div class="modal fade" id="modalDeleteVideo{!! $video->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar video</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿Desea eliminar el video seleccionado?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                        {!! Form::open(['method' => 'DELETE', 'url' => route('proyectos.videos.destroy', ['proyecto' => $item->id, 'video' => $video->id])]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection