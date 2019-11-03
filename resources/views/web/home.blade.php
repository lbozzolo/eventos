@extends('web.layout')


@section('content')

    @include('vendor.flash.message')
    
    @if(isset($slider))
        @include('web.partials.sliders')
    @endif

    <section class="container clearfix common-pad nasir-style">
        <div class="sec-header sec-header-pad">
            <h2>Nuestras Habitaciones</h2>
            <br>
        </div>
        <div class="room-slider">
            <div class="roomsuite-slider-two">

                @forelse($rooms as $room)

                    <div class="room-suite room-suite-htwo">
                        <div class="item">
                            <a href="{{ route('web.habitaciones', $room->type) }}">
                                <div class="ro-img">
                                    @if($room->images->count())
                                        <img src="{{ asset('imagenes/'. $room->mainImage()->path) }}">
                                    @else
                                        <img src="{{ asset('images/noimage.png') }}">
                                    @endif
                                </div>
                                <div class="ro-txt">
                                    <h2>Habitación {!! ucfirst($room->type) !!}</h2>
                                    <div class="ro-text-two">

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                @empty

                    <span class="text-secondary">Todavía no hay ninguna habitación cargada en el sistema.</span>

                @endforelse


            </div>
        </div>
    </section>

    <div class="nasir-subscribe-form-row row">
        <div class="container">
            <div class="row this-dashed">
                <div class="this-texts">
                    <h2>MANTENTE INFORMADO  </h2>
                    <h3>Recibe todas las noticias y novedades!!</h3>
                </div>
                {!! Form::open(['url' => route('web.newsletter'), 'method' => 'POST', 'class' => 'this-form input-group']) !!}

                    @include('vendor.flash.message')
                    <div><input name="email" type="email" class="form-control" placeholder="Ingrese una dirección de mail"></div>
                    <div>{!! Recaptcha::render() !!}</div>
                    <div class="text-right">
                        <span >
                            <button type="submit" class="res-btn">Subscribirse</button>
                        </span>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection