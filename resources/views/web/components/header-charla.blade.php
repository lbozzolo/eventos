@if($charla->header->images->count())


    {{--<section class="img-header"></section>--}}
    <section style="background-image: url('{!! $charla->header->mainImage() !!}')" class="img-header"></section>

    {{--<section style="padding: 0px">--}}
        {{--<img src="{!! $charla->header->mainImage() !!}" alt="background" class="img-header">--}}
    {{--</section>--}}
@endif