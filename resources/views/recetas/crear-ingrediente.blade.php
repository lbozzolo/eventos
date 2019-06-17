@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h2 style="font-size: 1.2em" class="text-dark">{!! ucfirst($receta->nombre) !!}</h2>
            <h1>Ingredientes / <span class="text-warning">Editar</span></h1>

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
                            {!! Form::select('medida', $medidas, null, ['class' => 'form-control', 'id' => 'selectize2', 'placeholder' => '']) !!}
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
                                <li class="list-group-item">
                                    {{--{!! $ingrediente->nombre !!}, {!! $ingrediente->pivot->cantidad !!} {!! config('sistema.medidas.'.$ingrediente->pivot->medida) !!}--}}
                                    {!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}
                                <span class="float-right">
                                    <button title="Eliminar" type="button" data-toggle="modal"
                                            data-target="#delete{!! $ingrediente->id !!}" class="btn btn-xs btn-rounded btn-danger">
                                            <i class="mdi mdi-close "></i></button>

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
        $('#selectize2').selectize();
    </script>

@endsection