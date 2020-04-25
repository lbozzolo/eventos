@extends('web.layout')

@section('content')

    <section id="pageTitle" class="page-title page-title-layout1 bg-overlay bg-parallax">
        <div class="bg-img"><img src="{!! asset('template-web/assets/images/page-titles/1.jpg') !!}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <h1 class="pagetitle__heading">Un poco de nuestra historia</h1>

                </div>
            </div>
        </div>
    </section>

    <section id="aboutLayout2" class="about about-layout2 pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="heading heading-2 mb-50">

                        <h2 class="heading__title">Nosotros</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="about__text mr-30">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                            <img src="{!! asset('template-web/assets/images/about/singnture.png') !!}" alt="singnture" class="signature">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-5 position-static">
                    <div class="row mt-50 about__imgs-container">
                        <div class="col-7">
                            <div class="about__img">
                                <img src="{!! asset('template-web/assets/images/about/1.jpg') !!}" alt="about" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="about__img mt-40">
                                <img src="{!! asset('template-web/assets/images/about/2.jpg') !!}" alt="about" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection