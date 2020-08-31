@extends('web.layout')

@section('content')

    @include('vendor.flash.message')

    <section id="pageTitle" class="page-title page-title-layout10 text-center bg-overlay bg-parallax" style="padding-top: 80px; padding-bottom: 80px">
        <div class="bg-img"><img src="{!! asset('template-web/assets/images/page-titles/11.jpg') !!}" alt="background" ></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="pagetitle__heading">Nuestros Eventos Virtuales</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="blogGrid" class="blog blog-grid" style="padding-bottom: 0px">
        <div class="container">
            <div class="row">

                @foreach($proyectos as $proyecto)

                    @if($proyecto instanceof Eventos\Models\Proyecto)
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            @include('web.components.proyecto-card')
                        </div>
                    @else


                        <div class="col-sm-12 col-md-6 col-lg-4">
                            @include('web.components.grupo-card')
                        </div>
                        {{--@if(!isset($loop) ?: $loop->first)--}}
                            {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                                {{--@include('web.components.grupo-card')--}}
                            {{--</div>--}}
                        {{--@endif--}}

                    @endif
                @endforeach

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <nav class="pagination-area" style="margin: 50px 0px">


                        @if($proyectos instanceof \Illuminate\Pagination\LengthAwarePaginator )

                            <div class="card-body text-center customed-pagination">
                                {!! $proyectos->appends(request()->input())->render() !!}
                            </div>

                        @endif

{{--                        {!! $proyectos->render() !!}--}}

                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection