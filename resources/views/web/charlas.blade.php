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
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        @include('web.components.proyecto-card')
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <nav class="pagination-area" style="margin-top: 50px">

                        {!! $proyectos->render() !!}

                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection