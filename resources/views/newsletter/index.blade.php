@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Newsletter /
                        <span class="text-warning" style="font-size: 0.7em">Listado de suscripciones al newsletter de Kallfu.com </span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @if(!empty($newsletters))
                    <div class="table-responsive">

                        <table class="table table-bordered datatables">
                            <thead class="bg-warning">
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Fecha de registro</th>
                                    <th style="width: 50px">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newsletters as $newsletter)
                                    <tr>
                                        <td>{!! $newsletter->id !!}</td>
                                        <td>{!! $newsletter->email !!}</td>
                                        <td>{!! $newsletter->fecha_creado !!}</td>
                                        <td>

                                            <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $newsletter->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="delete{!! $newsletter->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar sucripción</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>¿Desea eliminar la suscripción al newsletter de este email?</p>
                                                            <p class="lead text-info">{!! $newsletter->email !!}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {!! Form::open(['route' => ['newsletter.destroy', $newsletter->id], 'method' => 'delete']) !!}

                                                            <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    @else

                        <p class="text-dark">Todavía nadie se ha suscripto al newsletter.</p>

                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

@endsection
