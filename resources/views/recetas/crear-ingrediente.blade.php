@extends('layouts.app')

@section('css')

    <style type="text/css">
        /* Soluciona el problema del blinking en la ventana modal cuando está dentro de un list-group-item */
        .list-group-item, .list-group-item:hover{ z-index: auto; }
    </style>

@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h3 style="font-size: 1.2em" class="text-dark display-3">{!! ucfirst($receta->nombre) !!}</h3>
            <h2>Ingredientes / <span class="text-warning display-4">Editar</span></h2>

            <div class="row" style="margin-top: 20px">

                <div class="col-lg-6">

                    {!! Form::open(['url' => route($modelPlural.'.store.ingredientes', $receta->id), 'method' => 'post']) !!}

                    <div class="row">
                        <div class="form-group col-lg-12">
                            {!! Form::label('ingrediente', 'Agregar ingrediente a la receta') !!}
                            {!! Form::select('ingrediente', $ingredientes, null, ['class' => 'form-control', 'id' => 'selectize', 'placeholder' => '']) !!}
                            <small>
                                <span class="">¿No encuentra el ingrediente que necesita?</span>
                                <a class="" href="{!! route('ingredientes.index') !!}">agréguelo</a> al sistema primero.
                            </small>
                        </div>
                        <div class="form-group selectize-control single col-lg-6">
                            {!! Form::label('cantidad', 'Cantidad') !!}
                            <div class="selectize-control form-control single">
                                {!! Form::number('cantidad', null, ['class' => 'selectize-input', 'min' => '0', 'max' => 999]) !!}
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            {!! Form::label('medida', 'Medida') !!}
                            {!! Form::select('medida', $medidas, null, ['class' => 'form-control selectize2', 'placeholder' => '']) !!}
                        </div>

                        <div class="form-group col-lg-12" >
                            {!! Form::submit('+ Agregar ingrediente', ['class' => 'btn btn-success']) !!}
{{--                            <a href="{!! route('recetas.edit', $receta->id) !!}" class="btn btn-outline-primary">Volver a receta</a>--}}
                            <a href="{!! route($modelPlural.'.show', $receta->id) !!}" class="btn btn-outline-secondary">Volver</a>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>

                <div class="card-body col-lg-6">

                    @if($receta->ingredientes->count())
                        <h3>Listado de ingredientes</h3>
                        <ul>
                            @foreach($receta->ingredientes as $ingrediente)

                                <li class="list-group-item" id="ingrediente-{!! $ingrediente->id !!}">
                                    {{--{!! $ingrediente->nombre !!}, {!! $ingrediente->pivot->cantidad !!} {!! config('sistema.medidas.'.$ingrediente->pivot->medida) !!}--}}
                                    {!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}
                                    <span class="float-right">

                                        <button type="button" class="edit-ingrediente btn btn-primary btn-rounded btn-xs" data-ingrediente-id="{!! $ingrediente->id !!}"><i class="mdi mdi-pencil"></i> </button>
                                        <button title="Eliminar" type="button" data-toggle="modal"
                                                data-target="#delete{!! $ingrediente->id !!}" class="btn btn-xs btn-rounded btn-danger">
                                                <i class="mdi mdi-close "></i>
                                        </button>

                                        <!-- Modal -->
                                            <div class="modal fade" id="delete{!! $ingrediente->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Quitar Ingrediente</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>¿Desea quitar <span class="badge badge-dark" style="font-size: 1em">{!! $ingrediente->nombre !!}</span> de esta receta?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {!! Form::open(['url' => route('recetas.destroy.ingrediente', ['receta' => $receta->id, 'ingrediente' => $ingrediente->id]), 'method' => 'delete']) !!}

                                                            <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </span>
                                </li>

                                <li class="list-group-item" style="display: none" id="edit-ingrediente-{!! $ingrediente->id !!}">

                                    {!! Form::model($ingrediente, ['url' => route('recetas.update.ingrediente', $ingrediente->id), 'method' => 'put']) !!}

                                        {!! Form::hidden('receta_id', $receta->id) !!}
                                    <div class="row">

                                        <div class="form-group selectize-control single col-lg-5">
                                            <div class="selectize-control form-control single">
                                                {!! Form::number('cantidad', $ingrediente->pivot->cantidad, ['class' => 'selectize-input', 'min' => '0', 'max' => 999]) !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-5">
                                            {!! Form::select('medida', $medidas, $ingrediente->pivot->medida, ['class' => 'form-control selectize2', 'placeholder' => '']) !!}
                                        </div>
                                        <span class="form-group col-lg-2 mt-3">
                                            <button type="submit" class="btn btn-success btn-xs btn-rounded" style="padding: 6px 5px"><i class="mdi mdi-check"></i></button>
                                            <button type="button" class="btn btn-secondary btn-xs btn-rounded cancel-edition" data-ingrediente-id="{!! $ingrediente->id !!}">X </button>
                                     </span>
                                    </div>

                                    {!! Form::close() !!}

                                </li>

                            @endforeach
                        </ul>
                    @endif

                </div>

            </div>




        </div>
    </div>

@endsection

@section('js')

    <script>

        $('#selectize').selectize();
        $('.selectize2').selectize();

        $('.edit-ingrediente').click(function () {

            var ingrediente = $(this).attr('data-ingrediente-id');

            $(this).parent().parent().hide();
            $('#edit-ingrediente-'+ingrediente).show();
        });

        $('.cancel-edition').click(function () {

            var ingrediente = $(this).attr('data-ingrediente-id');

            $('#edit-ingrediente-'+ingrediente).hide();
            $('#ingrediente-'+ingrediente).show();
        });

    </script>

@endsection