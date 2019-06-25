@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2>{!! ucfirst($modelSpanishPlural) !!}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin ">
            <div class="card">
                <div class="card-body">
                    <h4>Ingresar nuevo {!! ucfirst($modelSpanish) !!}</h4>
                    {!! Form::open(['url' => route($modelPlural.'.store'), 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del '.ucfirst($modelSpanish)]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descripción') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('image', 'Imagen') !!}
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if($items->count())

                        <div class="row">
                            @foreach($items as $item)

                                <div class="col-lg-4 col-md-6 grid-margin stretch-card">
                                    <div class="card">
                                        @if($item->mainImageThumb())
                                            <img src="{{ route('imagenes.ver', $item->mainImageThumb()->path) }}" style="margin: 20px auto; width:64px; height: 64px">
                                        @else
                                            <img src="{!! asset('images/noimage.png') !!}" style="margin: 20px auto; height: 64px">
                                        @endif
                                        <div class="card-body" >
                                            <h5>
                                                {!! $item->name !!}
                                                <span title="Eliminar" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="float-right"><i class="mdi mdi-delete text-danger"></i></span>
                                                <a href="{!! route($modelPlural.'.edit', $item->id) !!}" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                                            </h5>
                                            <p>{!! $item->description !!}</p>

                                            <!-- Modal -->
                                            <div class="modal fade" id="delete{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar {!! ucfirst($modelSpanish) !!}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>¿Desea eliminar {!! ($gender == 'M')? 'este' : 'esta' !!} {!! $modelSpanish !!}?</p>
                                                            <h5 class="text-info">{!! ucwords($item->name) !!}</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {!! Form::open(['route' => [$modelPlural.'.destroy', $item->id], 'method' => 'delete']) !!}

                                                            <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                    @else
                        <h4>{!! ucfirst($modelSpanishPlural) !!} disponibles</h4>
                        <span class="text-muted">{!! $noResultsMessage !!}</span>
                    @endif
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')

    <script>
        $('#selectize').selectize();



        $('#selectize2').selectize({
            persist: false,
            maxItems: null,
            valueField: 'email',
            labelField: 'name',
            searchField: ['name', 'email'],
            options: [
                {!! $items->pluck('name', 'id') !!}
            ],
            render: {
                item: function(item, escape) {
                    return '<div>' +
                        (item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
                        (item.email ? '<span class="email">' + escape(item.email) + '</span>' : '') +
                        '</div>';
                },
                option: function(item, escape) {
                    var label = item.name || item.email;
                    var caption = item.name ? item.email : null;
                    return '<div>' +
                        '<span class="label">' + escape(label) + '</span>' +
                        (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                        '</div>';
                }
            },
            createFilter: function(input) {
                var match, regex;

                // email@address.com
                regex = new RegExp('^' + REGEX_EMAIL + '$', 'i');
                match = input.match(regex);
                if (match) return !this.options.hasOwnProperty(match[0]);

                // name <email@address.com>
                regex = new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i');
                match = input.match(regex);
                if (match) return !this.options.hasOwnProperty(match[2]);

                return false;
            },
            create: function(input) {
                if ((new RegExp('^' + REGEX_EMAIL + '$', 'i')).test(input)) {
                    return {email: input};
                }
                var match = input.match(new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i'));
                if (match) {
                    return {
                        email : match[2],
                        name  : $.trim(match[1])
                    };
                }
                alert('Invalid email address.');
                return false;
            }
        });


    </script>

@endsection
