@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <h2>{!! $item->nombre !!} / <span class="text-warning">PDF's</span></h2>

                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-body">

                                {!! Form::open(['url' => route($modelPlural.'.store.pdf', $item->id), 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                                <div class="form-group">
                                    {!! Form::label('url_pdf', 'Subir archivo PDF') !!}
                                    {!! Form::file('url_pdf', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                                    <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="btn btn-secondary">Cancelar</a>
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body" style="border: 1px solid lightgrey">

                                <h4>PDF's asociados al proyecto</h4>
                                <ul class="list-unstyled">
                                    @forelse($item->pdfs as $pdf)

                                        <li>
                                            <a href="{!! route('pdf.ver', $pdf->path) !!}" target="_blank">
                                                <span class="text-primary">
                                                    <i class="mdi mdi-file-pdf-box mdi-18px"></i> {!! $pdf->title !!}
                                                </span>
                                            </a>

                                            <span title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $pdf->id !!}" class="text-danger" style="cursor: pointer">eliminar</span>

                                            <!-- Modal -->
                                            <div class="modal fade" id="delete{!! $pdf->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar PDF</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>¿Desea eliminar PDF?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {!! Form::open(['route' => ['pdf.destroy', $pdf->id], 'method' => 'delete']) !!}

                                                            <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                    @empty

                                        <li class="text-muted"><i class="mdi mdi-vanish"></i> <small><em>No hay PDF's para mostrar.</em></small> </li>

                                    @endforelse
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection