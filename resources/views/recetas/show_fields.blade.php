
<div class="row mt-3">


    <div class="col-lg-8">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 stretch-card">
                <div class="card card-body">
                    @if($item->mainImage())
                        <img src="{{ route('imagenes.ver', $item->mainImage()->path) }}" class="img-responsive" style="width: 100%">
                    @else
                        <div style="border: 2px dotted lightgrey; padding: 20px 30px">
                            <p class="text-secondary">No hay imagen <br>de portada cargada.</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 stretch-card">
                <div class="card card-body">
                    @if($item->url_video)
                        <iframe width="100%" height="275" src="{!! $item->url_video !!}"
                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    @else
                        <div style="border: 2px dotted lightgrey; padding: 20px 30px">
                            <p class=" text-secondary">No hay video <br>cargado en esta receta.</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-12 grid-margin">

                <div class="card card-body mt-3">
                    <h5>Preparativos
                        <a href="{!! route('pasos.create', $item->id) !!}" class="btn btn-default">
                            <i class="mdi mdi-pencil-box-outline"></i>editar</a>
                    </h5>
                    @if($item->pasos->count())
                        <ul>
                            @foreach($item->pasos->sortBy('posicion') as $paso)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-3 col-xs-12 card" style="padding:0px">
                                            @if($paso->mainImageThumb())
                                                <img src="{{ route('imagenes.ver', $paso->mainImageThumb()->path) }}" style="width: 100%" >
                                            @else
                                                <div style="border: 2px dotted lightgrey; padding: 20px 30px">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-lg-10 col-sm-9 col-xs-12" style="padding-top: 10px">
                                            <p class="badge badge-primary">Paso {!! $paso->posicion !!}</p>
                                            <p>{!! $paso->descripcion !!}</p>
                                        </div>

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <small><em class="text-muted">todavía no se han cargado los preparativos</em></small>
                    @endif
                </div>

            </div>

        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card card-body">
            <h5>Ingredientes
                <a href="{!! route($modelPlural.'.create.ingredientes', $item->id) !!}" class="btn btn-default">
                    <i class="mdi mdi-pencil-box-outline"></i>editar</a>
            </h5>
            @if($item->ingredientes->count())
                <ul>
                    @foreach($item->ingredientes as $ingrediente)
                        <li>{!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}</li>
                        <li>{!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}</li>
                        <li>{!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}</li>
                        <li>{!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}</li>
                        <li>{!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}</li>
                    @endforeach
                </ul>
            @else
                <small><em class="text-muted">todavía no se ha cargado ningún ingrediente</em></small>
            @endif
        </div>
    </div>









</div>

