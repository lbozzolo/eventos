@extends('layouts.app')

@section('content')

    @can('crear_grupos')
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h3>Crear nuevo <span class="text-warning">Grupo de Eventos</span></h3>

                        {!! Form::open(['route' => $modelPlural.'.store', 'method' => 'post']) !!}

                        <div class="row">
                            <div class="form-group col-lg-12">
                                {!! Form::label('nombre', 'Nombre') !!}
                                {!! Form::text('nombre', null, ['class' => 'form-control', 'style' => 'border: 1px solid #aaa']) !!}
                            </div>
                            <div class="form-group col-lg-12">
                                {!! Form::label('descripcion', 'Descripción') !!}
                                {!! Form::text('descripcion', null, ['class' => 'form-control', 'style' => 'border: 1px solid #aaa']) !!}
                            </div>
                            <div class="form-group col-lg-12">
                                {!! Form::label('cagegoria_id', 'Categoría') !!}
                                {!! Form::select('categoria_id', (isset($categorias))? $categorias : [], null, ['class' => 'form-control select2']) !!}
                            </div>
                            <div class="form-group col-lg-12">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('grupos.index') !!}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    @endcan

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: false
        });

    </script>

@endsection