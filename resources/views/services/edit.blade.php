@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2>{!! ucfirst($modelSpanishPlural) !!}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin ">
            <div class="card">
                <div class="card-body">
                    <h4>Editar {!! ucfirst($modelSpanish) !!}</h4>

                    @if($item->mainImageThumb())
                        <div class="card-body text-center">
                            <img src="{{ route('imagenes.ver', $item->mainImageThumb()->path) }}" style="margin: 20px auto; width: 64px; height: 64px">
                        </div>
                    @endif

                    {!! Form::model($item, ['url' => route($modelPlural.'.update', $item->id), 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del '.ucfirst($modelSpanish)]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descripción') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        @if($item->images->count())
                            {!! Form::label('image', 'Reemplazar imagen') !!}
                        @else
                            {!! Form::label('image', 'Imagen') !!}
                        @endif
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Guardar cambios', ['class' => 'btn btn-info']) !!}
                        <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-outline-secondary">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if($items->count())

                        <div class="row">
                            @foreach($items as $it)

                                <div class="col-lg-4 col-md-6 grid-margin stretch-card">
                                    <div class="card">
                                        @if($it->mainImageThumb())
                                            <img src="{{ route('imagenes.ver', $it->mainImageThumb()->path) }}" style="margin: 20px auto; width: 64px; height: 64px">
                                        @else
                                            <img src="{!! asset('images/noimage.png') !!}" style="margin: 20px auto; height: 64px">
                                        @endif
                                        <div class="card-body" >
                                            <h5>
                                                {!! $it->name !!}
                                                <span title="Eliminar" data-toggle="modal" data-target="#delete{!! $it->id !!}" class="float-right"><i class="mdi mdi-delete text-danger"></i></span>
                                                <a href="{!! route($modelPlural.'.edit', $it->id) !!}" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                                            </h5>
                                            <p>{!! $it->description !!}</p>

                                            <!-- Modal -->
                                            <div class="modal fade" id="delete{!! $it->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar {!! ucfirst($modelSpanish) !!}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>¿Desea eliminar {!! ($gender == 'M')? 'este' : 'esta' !!} {!! $modelSpanish !!}?</p>
                                                            <h5 class="text-info">{!! ucwords($it->name) !!}</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {!! Form::open(['route' => [$modelPlural.'.destroy', $it->id], 'method' => 'delete']) !!}

                                                            <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                    @else
                        <h4>{!! ucfirst($modelSpanishPlural) !!} disponibles</h4>
                        <span class="text-muted">{!! $noResultsMessage !!}</span>
                    @endif
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')

    <script>$('#selectize').selectize();</script>

@endsection
