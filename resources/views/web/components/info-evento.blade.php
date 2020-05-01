<p class="">
    @if($charla->fecha)
        Comienza el {!! $charla->fecha !!} a las {!! $charla->hora !!}
    @else
        Fecha y hora a confirmar
    @endif
    @forelse($charla->pdfs as $pdf)
        <span>
            <a href="{!! route('pdf.ver', $pdf->path) !!}" target="_blank" class="ml-3 btn__bordered module__btn-request btn btn-outline-dark">Programa <i class="fa fa-file-text-o"></i> </a>
        </span>
    @empty
    @endforelse
</p>
