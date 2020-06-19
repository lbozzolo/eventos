<div class="bg-light mt-3 card-body">

    <h5>Códigos de acceso</h5>

    <i class="mdi mdi-asterisk float-right mdi-24px"></i>

    @if($item->codigos->count() == 0)

        <button title="Generar códigos" type="button" data-toggle="modal" data-target="#generarCodigos" class="ml-3 btn btn-sm btn-outline-primary float-right">
            Generar</button>

        <!-- Modal -->
        <div class="modal fade" id="generarCodigos" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Generar Códigos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['url' => route('proyectos.store.codigos', $item->id), 'method' => 'post']) !!}

                        <div class="form-group">
                            <p>
                                Se generarán los códigos de acceso necesarios para ingresar a presenciar el evento.
                                Los mismos deberán ser distribuidos individualmente a cada asistente por quién corresponda.
                            </p>
                            {!! Form::label('cantidad_codigos', '¿Cuántos códigos desea generar?') !!}
                            <p class="lead">¿Cuántos códigos desea generar para este proyecto?</p>
                            {!! Form::number('cantidad_codigos', null, ['class' => 'form-control', 'max' => '5000', 'min' => '1']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Generar', ['class' => 'btn btn-primary']) !!}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>                                                                </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>

    @endif

    <span class="text-black">{!! $item->codigos->count() !!}</span>
    <span class="text-gray"> generados</span>  <br>
    <span class="text-black">{!! $item->codigosDisponibles()->count() !!}</span>
    <span class="text-success"> disponibles</span>  <br>

    @if($item->codigos->count() != 0)

        <div class="mt-3">
            {{--<button title="Ver códigos" type="button" data-toggle="modal" data-target="#verCodigos" class="ml-1 mt-1 btn btn-sm btn-outline-dark ">--}}
                {{--Ver Códigos</button>--}}

            <a href="{!! route('proyectos.ver.codigos', $item->id) !!}" class="ml-1 mt-1 btn btn-sm btn-outline-dark">Ver Códigos</a>

            <a href="{!! route('proyectos.export.codigos', $item->id) !!}" class="mt-1 ml-1 btn  btn-sm btn-primary ">
                exportar</a>
        </div>

        <!-- Modal -->
        <div class="modal fade text-left" id="verCodigos" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Códigos generados</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th class="text-primary text-center">Código</th>
                                <th class="text-primary text-center">Inscripto</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($item->codigos as $codigo)
                                <tr>
                                    <td class="text-center">
                                        @if($codigo->user)
                                            <span class="text-danger">{!! $codigo->code !!}</span>
                                        @else
                                            <span class="text-black">{!! $codigo->code !!}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($codigo->user)
                                            {!! $codigo->user->fullname !!}
                                            <small class="text-gray">#{!! $codigo->user->id !!}</small>
                                        @else
                                            <em><small class="text-muted">disponible</small> </em>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                    <div class="modal-footer">
                        <a href="{!! route('proyectos.export.codigos', $item->id) !!}" class="mt-1 ml-1 btn  btn-sm btn-primary ">
                            exportar</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


    @endif

</div>