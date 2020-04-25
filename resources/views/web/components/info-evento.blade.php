<p class="lead">
    @if($charla->fecha)
        Comienza el {!! $charla->fecha !!} a las {!! $charla->hora !!}
    @else
        Fecha y hora a confirmar
    @endif
    @forelse($charla->pdfs as $pdf)
        <span> -
            <a href="{!! route('pdf.ver', $pdf->path) !!}" target="_blank">Ver Programa</a>
        </span>
    @empty
    @endforelse
</p>
<p>{!! $charla->descripcion !!}</p>