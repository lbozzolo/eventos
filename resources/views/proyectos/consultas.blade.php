@extends('layouts.app')

@section('content')

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h2>{!! ucfirst($item->nombre) !!} / <span class="text-warning">Consultas</span></h2>
        </div>
    </div>

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">

            <ul>
                @forelse($item->consultas->sortByDesc('id') as $consulta)
                    <li class="list-group-item">
                        <p>{!! $consulta->texto !!}</p>
                        <strong>{!! $consulta->nombre !!}</strong> -
                        {!! $consulta->hora_creado !!}
                    </li>
                @empty
                    <td colspan="2">
                        <em class="text-gray">Todavía no se han hecho consultas en este evento.</em>
                    </td>
                @endforelse
            </ul>

        </div>
    </div>

@endsection