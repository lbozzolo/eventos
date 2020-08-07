@extends('layouts.app')

@section('content')

    @can('mostrar_respuestas')
        <div class="row">
            <div class="col-lg-12">
                <div class="card grid-margin">
                    <div class="card-body">
                        <h2>
                            {!! $item->proyecto->nombre !!} {!! ($item->proyecto->cliente)? ', '.$item->proyecto->cliente->nombre : '' !!}
                            / <span class="text-warning">Encuestas</span> <br>
                            <a href="{!! route('proyectos.encuestas', $item->proyecto->id) !!}" class="btn btn-outline-dark">Volver</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Reporte de respuestas</h3>

                        <div class="row">
                            <div class="col-lg-12">

                                @foreach($answersByQuestion as $question => $answers)
                                    <div class="card grid-margin">
                                        <div class="card-body">
                                            <p class="text-primary">{!! $question !!}</p>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <table class="table table-condensed">

                                                        <tbody>
                                                        @foreach($answers as $answer => $total)
                                                            @if($answer != 'textos')
                                                                <tr>
                                                                    <td>{!! $answer !!}</td>
                                                                    <td class="text-center">{!! $total !!}</td>
                                                                </tr>
                                                            @else
                                                                <tr>
                                                                    <td colspan="2">

                                                                        <button title="Respuestas" type="button" data-toggle="modal" data-target="#answers{!! str_slug($question, '-') !!}" class="btn btn-sm  btn-dark">ver respuestas</button>

                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="answers{!! str_slug($question, '-') !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" ><i class="mdi mdi-voice text-primary"> </i> Respuestas</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <p class="text-primary">{!! $question !!}</p>
                                                                                        <ul>
                                                                                            @foreach($total as $respuesta)
                                                                                                <li class="list-group-item">{!! $respuesta !!}</li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <span class="text-primary">Encuesta</span><br>
                        <p class="lead">{!! $item->nombre !!}</p>
                        @if($item->iframe)
                            <div style="border-bottom: 1px dashed lightgray">
                                <span class="text-info">Iframe</span>
                                <span class="float-right">{!! $item->iframe->title !!}</span>
                            </div>
                        @else
                            <div style="border-bottom: 1px dashed lightgray">
                                <span class="text-primary">Iframe</span>
                                <span class="float-right">Todos</span>
                            </div>
                        @endif
                        <div style="border-bottom: 1px dashed lightgray">
                            <span class="text-info">Inscriptos al evento</span>
                            <span class="float-right">{!! $item->proyecto->inscriptos->count() !!}</span>
                        </div>
                        <div style="border-bottom: 1px dashed lightgray">
                            <span class="text-info">Encuestas respondidas</span>
                            <span class="float-right">{!! $answersByUser->count() !!}</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    @endcan

@endsection

@section('js')

    <script>

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('.select2').select2({
            multiple: true
        })

    </script>

@endsection