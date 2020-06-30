<div class="card grid-margin">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-primary">Resumen</h4>
                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td colspan="2">
                            @if($item->inscriptos->count() == 1)
                                Se inscribió {!! $item->inscriptos->count() !!} persona el
                                {!! $item->inscriptos->first()->created_at->format('d-m-Y') !!}
                            @else
                                Se inscribieron {!! $item->inscriptos->count() !!} personas entre el
                                {!! $item->inscriptos->first()->created_at->format('d-m-Y') !!} y el
                                {!! $item->inscriptos->last()->created_at->format('d-m-Y') !!}
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($item->totalAsistentes() == 1)
                                Asistió {!! $item->totalAsistentes() !!}
                            @else
                                Asistieron {!! $item->totalAsistentes() !!}
                            @endif

                        </td>
                        <td>
                            <span class="font-weight-semibold">{!! $item->porcentajeTotalAsistentes() !!} %</span>
                            <div class="progress progress-md">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {!! $item->porcentajeTotalAsistentes() !!}%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    @if($item->totalAsistentes() != 0)
                    <tr>
                        <td>
                            El pico máximo fue a las
                            {!! $item->reportes->sortByDesc('cantidad_online')->first()->created_at->format('H:i') !!} hs
                        </td>
                        <td>
                            <span class="font-weight-semibold">{!! $item->porcentajePicoUsuariosOnline() !!} %</span>
                            ({!! ($item->picoUsuariosOnline() > 1)? $item->picoUsuariosOnline().' usuarios' : '1 usuario' !!} online)
                            <div class="progress progress-md">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {!! $item->porcentajePicoUsuariosOnline() !!}%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    @endif
                    <tr>
                        <td>
                            @if($item->vistas_finalizado)
                                Se ha visualizado
                                {!! ($item->vistas_finalizado == 1)? $item->vistas_finalizado.' vez' : $item->vistas_finalizado.' veces' !!} en diferido
                            @else
                                No hay vistas en diferido
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            @if($item->consultas->count())
                                Se realizaron {!! $item->consultas->count() !!} consultas
                            @else
                                No se realizó ninguna consulta
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>