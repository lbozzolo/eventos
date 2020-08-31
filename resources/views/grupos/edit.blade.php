@extends('layouts.app')

@section('content')

    @can('editar_grupos')
        <div class="row">
            <div class="col-lg-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2>Grupo de eventos -  <span class="text-warning">{!! $item->nombre !!}</span> </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card">
                    <div class="card-body">

                        {!! Form::model($item, ['url' => route($modelPlural.'.update', $item->id), 'method' => 'put']) !!}

                        <div class="row">
                            <div class="col-lg-8">

                                <div class="form-group">
                                    <p>Nombre del grupo</p>
                                    {!! Form::text('nombre', $item->nombre, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descripcion', 'Descripción') !!}
                                    {!! Form::text('descripcion', ($item->descripcion)? $item->descripcion : null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <p>Seleccione los eventos que desea asociar a este grupo de eventos</p>
                                    {!! Form::select('proyectos[]', (isset($proyectos))? $proyectos : [], null, ['class' => 'form-control select2m', 'multiple']) !!}
                                </div>

                                <div class="form-group mt-5">
                                    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                                    <a href="{!! route('grupos.index') !!}" class="btn btn-secondary">Cancelar</a>
                                    <a href="{!! route('grupos.imagenes', $item->id) !!}" class="btn btn-outline-dark">
                                        <i class="mdi mdi-image"> </i> Imagen de portada
                                    </a>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div style="background: url('{!! $item->mainImage() !!}') no-repeat  center; background-size: cover;  height: 100%"></div>
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
            multiple: true
        });

        $('.select2m').select2({
            multiple: true
        });

    </script>

@endsection