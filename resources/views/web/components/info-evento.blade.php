<div class="text-white pt-2 pb-2 pr-3">
    @if($charla->fecha)

        <span class="mr-5 mt-2">
            <i class="fa fa-calendar fa-24px text-azul-oscuro"></i>
            <strong class="bg-dark-green text-white pt-2 pb-2 pl-3 pr-3" style="font-size: 1.5em">
                {!! $charla->getNameOfDay($charla->fecha) !!}
                {!! $charla->fecha !!}
            </strong>
        </span>
        <span>
            <i class="fa fa-clock-o fa-24px text-azul-oscuro"></i>
            <strong class="pl-3" style="font-size: 1.5em">{!! $charla->hora !!} {!! ($charla->duracion)? '('.$charla->duracion.')' : '' !!}</strong>
        </span>

    @else

        Fecha y hora a confirmar

    @endif

</div>