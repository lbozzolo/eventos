@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h2>
                {!! ucfirst($modelSpanishPlural) !!}
                <button title="Agregar" type="button" data-toggle="modal" data-target="#createOcupacion" class="btn btn-primary">
                    Agregar</button>

            </h2>

            <!-- Modal Agregar -->
            <div class="modal fade" id="createOcupacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" ><i class="mdi mdi-alert-plut text-success"></i> Agregar {!! $modelSpanish !!}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        {!! Form::open(['route' => [$modelPlural.'.store'], 'method' => 'post']) !!}
                        <div class="modal-body">

                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}

                        </div>
                        <div class="modal-footer">

                            <button title="Aceptar" type="submit" class="btn btn-sm btn-primary">Aceptar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">

            @if($items->count())
                <div class="table-responsive">
                    @include($modelPlural.'.table')
                </div>
            @else
                <span class="text-muted">No hay {!! $modelSpanishPlural !!} en el sistema.</span>
            @endif

        </div>
    </div>

@endsection