@extends('layouts.app')

@section('css')

    <style type="text/css">

        .input-border input {
            border: 1px solid  lightgray;
        }

    </style>

@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2>
                        {!! $item->nombre !!} / <span class="text-warning">Enlaces</span>
                        <a href="{!! route('proyectos.show', $item->id) !!}" class="btn btn-outline-dark">Volver</a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['url' => route('proyectos.links.store', $item->id), 'method' => 'post', 'class' => 'input-border']) !!}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('nombre', 'Nombre') !!}
                                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                            @if($item->iframes->count() > 1)
                                <div class="form-group">
                                    {!! Form::label('iframe_id', 'Sala') !!}
                                    {!! Form::select('iframe_id', $item->iframes->pluck('title', 'id'), null, ['class' => 'form-control select2', 'placeholder' => 'Todas las salas', 'style' => 'border: 1px solid lightgray']) !!}
                                </div>
                            @endif
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {!! Form::label('url', 'URL') !!}
                                    {!! Form::text('url', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-body">

                    @foreach($item->iframes as $iframe)
                        @if($iframe->links->count())
                            <h4 class="text-primary">{!! ($iframe->title)? ucfirst($iframe->title) : '' !!}</h4>
                            <ul class="list-unstyled">
                                @forelse($iframe->links as $link)
                                    <li>
                                        <strong>{!! $link->nombre !!}</strong>
                                        <span title="Eliminar" data-toggle="modal" data-target="#delete{!! $link->id !!}"><i class="mdi mdi-close-circle text-danger"></i></span>
                                        <br>
                                        <small>{!! $link->url !!}</small>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete{!! $link->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar enlace</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>¿Desea eliminar este enlace?</p>
                                                        <p class="lead">{!! $link->nombre !!}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        {!! Form::open(['route' => ['proyectos.links.destroy', $link->id], 'method' => 'delete']) !!}

                                                        <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                @empty
                                @endforelse
                            </ul>
                            <hr>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>

    </div>

@endsection