@extends('layouts.app')

@section('content')

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h2>Inscripciones / <span class="text-warning">Inscribir desde listado de Usuarios</span></h2>
        </div>
    </div>

    <div class="card col-lg-12">
        <div class="card-body">



            <div class="row">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Actualmente inscripto</th>
                                <th>Inscribir</th>
                            </tr>
                        </thead>
                        @foreach($items as $item)
                            <tr>
                                {!! Form::open(['route' => 'users.inscripciones.store.desde.usuarios']) !!}
                                    <td>
                                        {!! $item->fullname !!} - {!! $item->email !!}<br>
                                        DNI {!! ($item->dni)? $item->dni : '-' !!}
                                    </td>
                                    <td>
                                        <ul>
                                        @forelse($item->proyectos as $proy)
                                            <li>{!! $proy->nombre !!}</li>
                                        @empty
                                        @endforelse
                                        </ul>
                                    </td>
                                    <td>
                                        {!! Form::hidden('user_id', $item->id) !!}
                                        <div class="form-group">
                                            {!! Form::select('proyecto_id', $proyectos, $item->proyectos, ['class' => 'form-control select2']) !!}
                                        </div>
                                        {!! Form::submit('Inscribir', ['class' => 'btn btn-success btn-sm']) !!}
                                    </td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach

                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: false
        })

    </script>

@endsection
