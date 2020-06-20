@extends('layouts.app')

@section('css')
    <style type="text/css">
        .code {
            border: 1px dashed red;
            padding: 10px;
        }

        .disponible {
            border: 1px dashed green;
            color: green;
            padding: 10px;
        }

        .user {
            padding-top: 0px;
        }
    </style>
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card grid-margin">
                <div class="card-body">
                    <h2>
                        {!! $proyecto->nombre !!} /
                        <span class="text-warning">Códigos generados</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card grid-margin">
                <div class="card-body">
                    <a href="{!! route('proyectos.ver.codigos', $proyecto->id) !!}" class="btn btn-primary">Total ({!! $proyecto->codigos->count() !!})</a>
                    <a href="{!! route('proyectos.ver.codigos', ['id' => $proyecto->id, 'estado' => 'disponibles']) !!}" class="btn btn-success">Disponibles ({!! $proyecto->codigosDisponibles()->count() !!})</a>
                    <a href="{!! route('proyectos.show', ['id' => $proyecto->id]) !!}" class="btn btn-outline-dark">Volver</a>

                    <hr>
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th class="text-primary">Código</th>
                                <th class="text-primary">Inscripto</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($codigos as $codigo)
                                <tr>
                                    <td class="text-left lead">
                                        @if($codigo->user)
                                            <p class="text-danger text-center code">{!! $codigo->code !!}</p>
                                        @else
                                            <p class="text-center disponible">{!! $codigo->code !!}</p>
                                        @endif
                                    </td>
                                    <td class="text-left">
                                        @if($codigo->user)

                                            <div class="user">
                                                <span>{!! $codigo->user->fullname !!}<small class="text-gray"> #{!! $codigo->user->id !!}</small></span><br>
                                                <span class="text-gray">{!! ($codigo->user->email)? $codigo->user->email : '' !!}</span>
                                            </div>

                                        @else
                                            <em><small class="text-muted">disponible</small> </em>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @if($codigos instanceof \Illuminate\Pagination\LengthAwarePaginator )

                            <div class="card-body text-center customed-pagination">
                                {!! $codigos->appends(request()->input())->render() !!}
                            </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['url' => route('proyectos.buscar.codigo', $proyecto->id), 'method' => 'get', 'class' => 'form']) !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('search', 'Buscar por código o inscripto') !!}
                                {!! Form::text('search', null, ['class' => 'form-control mr-sm-2', 'autocomplete' => 'off', 'style' => 'border: 1px solid lightgray']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::submit('Buscar', ['class' => 'btn btn-outline-primary btn-sm mt-4']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}


                    @if(isset($result))
                        <div>
                            @if($result->count())
                                <p class="text-gray">{!! $result->count() !!} resultado(s)</p>
                            @endif
                            <table class="table table-condensed">
                                <tbody>
                                @forelse($result as $user)
                                    <tr>
                                        <td class="text-left lead">
                                            @if($user->user)
                                                <p class="text-danger text-center code">{!! $user->code !!}</p>
                                            @else
                                                <p class="text-center disponible">{!! $user->code !!}</p>
                                            @endif
                                        </td>
                                        <td class="text-left">
                                            @if($user->user)

                                                <div class="user">
                                                    <span>{!! $user->user->fullname !!}<small class="text-gray"> #{!! $user->user->id !!}</small></span><br>
                                                    <span class="text-gray">{!! ($user->user->email)? $user->user->email : '' !!}</span>
                                                </div>

                                            @else
                                                <em><small class="text-muted">disponible</small> </em>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <em><small class="text-gray">No hay resultados</small> </em>
                                @endforelse
                                </tbody>
                            </table>

                            @if($result instanceof \Illuminate\Pagination\LengthAwarePaginator )

                                <div class="card-body text-center customed-pagination">
                                    {!! $result->appends(request()->input())->render() !!}
                                </div>

                            @endif

                        </div>
                    @endif

                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: true
        })

    </script>

@endsection