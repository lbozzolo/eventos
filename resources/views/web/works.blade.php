@extends('web.layout')

@section('content')

    <!--WORKS START-->
    <div id="social" class="content clearfix">

        <div class="container">
            <div class="top-content clearfix">
                <h3 class="content-title">WORKS</h3>
            </div>
        </div>

        <div id="port-body" class="port-body clearfix">

            @forelse($works as $work)

                <div class="col-md-4  col-sm-6 port-item brand future">
                    <a class="port-ajax" href="">
                        <div class="hovers">
                            <div class="hover-detail">
                                <h4>{!! $work->title !!}</h4>
                                <i class="icon-detail fa fa-bug"></i>
                                <p>{!! $work->body !!}</p>
                            </div>
                        </div>
                        <img src="{!! ($work->mainImage())? asset('imagenes/'. $work->mainImage()->path) : asset('imagenes/'. $work->images->first()->path) !!}" alt="portfolio">
                    </a>
                </div>

            @empty

                <span>No hay ningún trabajo para mostrar</span>

            @endforelse

        </div>

        <div id="worksajax"></div>
        <div class="worksajax clearboth clearfix"></div>

    </div>

@endsection