<div class="card">

    <div class="card-body">


        <div class="row">



            <div class="col-lg-8">

                <div class="card-header">
                    <span>
                        @if($item->active)
                            <label class="badge badge-success">{!! ($gender == 'M')? 'activo' : 'activa' !!}</label>
                        @else
                            <label class="badge badge-danger">{!! ($gender == 'M')? 'inactivo' : 'inactiva' !!}</label>
                        @endif
                    </span>
                    <label class="badge badge-dark"><i class="mdi mdi-clock"></i> {!! $item->tiempo !!} {!! ($item->tiempo > 1)? 'minutos' : 'minuto' !!}</label>
                    <small class="mr-2" style="padding: 5px">creada el {!! $item->fecha_creado !!}</small>
                    <h4>{!! $item->nombre !!}</h4>
                    <p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>

                </div>

                <div class="card-body">
                    <h5>Ingredientes</h5>
                    @if($item->ingredientes->count())
                        <ul>
                            @foreach($item->ingredientes as $ingrediente)
                                <li>{!! $ingrediente->nombre !!}</li>
                            @endforeach
                        </ul>
                    @else
                        <small><em class="text-muted">todavía no se ha cargado ningún ingrediente</em></small>
                    @endif
                </div>

                <div class="card-body">
                    <h5>Preparativos</h5>
                    @if($item->pasos->count())
                        <ul>
                            @foreach($item->pasos->sortBy('posicion') as $paso)
                                <li>
                                    <span class="lead">Paso {!! $paso->posicion !!}</span>
                                    <p>{!! $paso->descripcion !!}</p>
                                    @if($paso->mainImage())
                                        <div class="card-body">
                                            <img src="{{ route('imagenes.ver', $item->mainImage()->path) }}" class="img-responsive" style="width: 100%">
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <small><em class="text-muted">todavía no se han cargado los preparativos</em></small>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{!! route($modelPlural.'.edit', $item->id) !!}" class="btn btn-outline-primary"><i class="mdi mdi-pencil"></i> Editar</a>
                    <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-default">Cancelar</a>
                </div>

            </div>

            <div class="col-lg-4">

                @if($item->mainImage())
                    <div class="card-body">
                        <img src="{{ route('imagenes.ver', $item->mainImage()->path) }}" class="img-responsive" style="width: 100%">
                    </div>
                @else
                    <div class="card-body">
                        <div style="border: 2px dotted lightgrey; padding: 20px 30px">
                            <p class="lead text-default">No hay imagen <br>de portada cargada.</p>
                        </div>
                    </div>
                @endif
                @if($item->url_video)
                    <div class="card-body">
                        <h5>Video</h5>
                        <iframe width="100%" height="250" src="{!! $item->url_video !!}"
                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                @endif

            </div>

        </div>

    </div>

</div>
