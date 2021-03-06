@if(isset($total))
    <p>Total de inscripciones: {!! $total !!}</p>
@endif
@role('Cliente')
<table class="table datatables">
    @endrole

    @role('Superadmin|Admin')
    <table class="table table-striped table-condensed">
        @endrole

        <thead class="bg-dark text-white">
        <tr>
            <th class="text-center" style="width: 400px">Usuario</th>
            <th>Contacto</th>
            <th>Institución</th>
            <th>Origen</th>
            <th style="width: 80px">Asistió</th>
            <th style="width: 150px">Alta</th>
            @role('Superadmin|Admin')
            <th style="width: 150px">Opciones</th>
            @endrole
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)

            <tr>

                <td>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <span>{!! $item->id !!}</span>
                            @role('Superadmin|Admin')
                            <span  class="user ml-3" id="{!! $item->id !!}">
                            <i class="mdi mdi-checkbox-blank-circle-outline text-danger"></i>
                        </span>
                            @endrole
                        </div>
                        <div class="col-lg-8 text-left">
                            @if($item->fullname == 'Usuario anónimo')
                                <em class="text-gray">{!! $item->lastname !!}</em><br>
                            @else
                                <span>{!! $item->fullname !!}</span><br>
                            @endif

                            @if($item->dni && !$item->paidUser())
                                <span class="text-primary">dni: </span>{!! $item->dni !!}
                            @else
                                @if($item->dni)
                                    <span class="text-primary">código: </span>{!! $item->dni !!}
                                @endif
                            @endif
                        </div>
                    </div>
                </td>
                <td>
                    @if(!$item->paidUser())
                        @if($item->email)
                            <span>{!! $item->email !!}</span>
                        @else
                            <em class="text-gray"><small>email no disponible</small></em>
                        @endif

                        <br>
                        @if($item->phone)
                            <span>tel: {!! $item->phone !!}</span>
                        @else
                            tel: <em class="text-gray"><small>no disponible</small></em>
                        @endif
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if($item->institucion)
                        {!! $item->institucion !!}
                    @else
                        <em class="text-gray"><small>no especificado</small></em>
                    @endif
                </td>
                <td>
                    @if(!$item->paidUser())
                        {!! ($item->localidad)? $item->localidad.'. ' : '' !!}<br>
                        <small class="text-dark">{!! $item->pais_origen !!}</small>
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if($item->pivot && $item->pivot->attendment)
                        <i class="mdi mdi-check mdi-18px text-success"> </i>
                    @else
                        <i class="mdi mdi-close mdi-18px text-danger"> </i>
                    @endif
                </td>
                <td>{!! $item->fecha_creado !!}</td>
                @role('Superadmin|Admin')
                <td>

                    <div class='btn-group'>
                        <button title="Ver" type="button" data-toggle="modal" data-target="#ver{!! $item->id !!}" class="btn btn-xs btn-primary"><i class="mdi mdi-file-document mdi-18px"></i></button>
                        <a href="{!! route('users.inscripciones.edit', $item->id) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                        @if(Auth::user()->id != $item->id)
                            <button title="Desinscribir" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                        @else
                            <button type="button" class="btn btn-xs  btn-danger" disabled><i class="mdi mdi-delete mdi-18px"></i></button>
                        @endif
                    </div>

                    <!-- Modal Eliminar -->
                    <div class="modal fade" id="delete{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Desinscribir Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['url' => route('users.remove.inscripto', $item->id), 'method' => 'post']) !!}
                                <div class="modal-body">
                                    <p>¿De qué evento desea desinscribir a este usuario?</p>
                                    {!! Form::select('proyecto_id', ($item->proyectos->count())? $item->proyectos->pluck('nombre', 'id') : [], null, ['class' => 'select2 form-control', 'style' => 'width: 100%']) !!}

                                </div>
                                <div class="modal-footer">
                                    <button title="Desinscribir" type="submit" class="btn btn-sm btn-danger">Desinscribir</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                    <!-- Modal Ver -->
                    <div class="modal fade" id="ver{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-unstyled">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span class="text-primary">Nombre</span><br>
                                                    <span>{!! $item->name !!}</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span class="text-primary">Apellido</span><br>
                                                    <span>{!! $item->lastname !!}</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="text-primary">Email</span><br>
                                            <span>{!! $item->email !!}</span>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span class="text-primary">Teléfono</span><br>
                                                    <span>{!! $item->phone !!}</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span class="text-primary">DNI</span><br>
                                                    <span>{!! $item->dni !!}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @if($item->localidad || $item->pais)
                                            <li class="list-group-item">
                                                <span class="text-primary">Origen</span><br>
                                                <span>{!! $item->localidad !!}, {!! $item->pais_origen !!}</span>
                                            </li>
                                        @endif
                                        @if($item->ocupacion_formatted)
                                            <li class="list-group-item">
                                                <span class="text-primary">Ocupación</span><br>
                                                <span>{!! $item->ocupacion_formatted !!}</span>
                                            </li>
                                        @endif
                                        @if($item->institucion)
                                            <li class="list-group-item">
                                                <span class="text-primary">Institución</span><br>
                                                <span>{!! $item->institucion !!}</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
                @endrole
            </tr>

        @endforeach
        </tbody>



    </table>

    @if($items instanceof \Illuminate\Pagination\LengthAwarePaginator )

        <div class="card-body text-center customed-pagination">
            {!! $items->appends(request()->input())->render() !!}
        </div>

    @endif


    @section('js')

        <script>

            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });

        </script>

        @role('Superadmin|Admin')

        <script>



            function isOnline() {

                var url = '{!! route('users.is.connected') !!}';

                $(".user").map(function() {

                    let id = $(this).attr('id');

                    $.ajax(
                        {
                            type : 'get',
                            url : url,
                            dataType : 'json',
                            data : {
                                'user_id': id
                            },
                            success : function(data) {

                                let icono = $('#'+ id + ' i');
                                icono.removeClass();

                                if(data.status === 'connected'){
                                    icono.addClass('mdi mdi-checkbox-blank-circle text-success')
                                } else {
                                    icono.addClass('mdi mdi-checkbox-blank-circle-outline text-danger')
                                }

                            },
                        });

                }).get();

            }

            isOnline();
            setInterval(function(){ isOnline(); }, 30000);

        </script>

        @endrole

@endsection
