@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h2>
                        {!! $proyecto->nombre !!} /
                        <span class="text-warning">Material relacionado</span>
                        <a href="{!! route('proyectos.show', $proyecto->id) !!}" class="btn btn-outline-dark">Volver</a>
                    </h2>

                    <div class="card card-body text-left mb-5 mt-5">
                        <div id="resumable-error" style="display: none">
                            Reanudable no compatible
                        </div>
                        <div id="resumable-drop" style="display: none">
                            <p class="text-info">Subir material relacionado</p>
                            <p>
                                <button class="btn btn-outline-dark" id="resumable-browse" data-url="{{ url('upload') }}" data-project="{{ $proyecto->id }}">Subir o arrastrar aquí</button>
                            </p>
                            <div class="alert alert-success alert-dismissible" style="display: none" id="success">
                                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                                <i class="icon fa fa-check"></i>
                                Éxito
                            </div>
                            <p></p>
                        </div>
                        <ul id="file-upload-list" class="list-unstyled"  style="display: none">

                        </ul>
                    </div>


                    @if($items->count())

                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th class="text-center pb-3" style="width: 70px">#Id</th>
                                <th class="pb-3">Archivo</th>
                                {{--<th class="pb-3" style="width: 200px">Tipo de archivo</th>--}}
                                <th class="pb-3">Tags</th>
                                <th class="pb-3" style="width: 200px">Autor</th>
                                <th class="pb-3">Área</th>
                                <th class="pb-3" style="width: 200px">Fecha</th>
                                <th class="pb-3" style="width: 200px">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td class="text-right">
                                        <span class="badge badge-dark">{!! $item->id !!}</span>
                                    </td>
                                    <td>
                                        <span title="{!! $item->name !!}">{!! $item->nombre !!}</span><br>
                                    </td>
{{--                                    <td>{!! $item->mime !!}</td>--}}
                                    <td>
                                        @forelse($item->tags as $tag)
                                            <span class="badge badge-primary">{!! $tag->name !!}</span>
                                        @empty
                                        @endforelse
                                    </td>
                                    <td>{!! ($item->author)? $item->author : '-' !!}</td>
                                    <td>{!! ($item->area)? $item->area : '-' !!}</td>
                                    <td>{!! $item->fecha_creado !!}</td>
                                    <td>
                                        @include('proyectos.partials.acciones-table-material')
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @if($items instanceof \Illuminate\Pagination\LengthAwarePaginator )

                            <div class="card-body text-center customed-pagination">
                                {!! $items->appends(request()->input())->render() !!}
                            </div>

                        @endif

                    @else
                        <span class="text-muted">No se encontraron registros.</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: false
        });

        $('.select-multiple').select2({
            multiple: true,
            tags: true
        });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/resumable.js/1.1.0/resumable.min.js"></script>

    <script>
        var $ = window.$; // use the global jQuery instance

        var $fileUpload = $('#resumable-browse');
        var $fileUploadDrop = $('#resumable-drop');
        var $uploadList = $("#file-upload-list");

        if ($fileUpload.length > 0 && $fileUploadDrop.length > 0) {
            var resumable = new Resumable({
                // Use chunk size that is smaller than your maximum limit due a resumable issue
                // https://github.com/23/resumable.js/issues/51
                chunkSize: 1 * 1024 * 1024, // 1MB
                simultaneousUploads: 3,
                testChunks: false,
                throttleProgressCallbacks: 1,
                // Get the url from data-url tag
                target: $fileUpload.data('url'),
                // Append token to the request - required for web routes
                query:{_token : $('input[name=_token]').val(), project : $fileUpload.data('project')}
            });

            // Resumable.js isn't supported, fall back on a different method
            if (!resumable.support) {
                $('#resumable-error').show();
            } else {
                // Show a place for dropping/selecting files
                $fileUploadDrop.show();
                resumable.assignDrop($fileUpload[0]);
                resumable.assignBrowse($fileUploadDrop[0]);

                // Handle file add event
                resumable.on('fileAdded', function (file) {
                    // Show progress pabr
                    $uploadList.show();
                    // Show pause, hide resume
                    $('.resumable-progress .progress-resume-link').hide();
                    $('.resumable-progress .progress-pause-link').show();
                    // Add the file to the list
                    $uploadList.append('<li class="list-group-item resumable-file-' + file.uniqueIdentifier + '">Subiendo <span class="resumable-file-name"></span> <span class="resumable-file-progress"></span>');
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-name').html(file.fileName);
                    // Actually start the upload
                    resumable.upload();
                });
                resumable.on('fileSuccess', function (file, message) {
                    // Reflect that the file upload has completed
                    location.reload();
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html('(completo)');
                });
                resumable.on('fileError', function (file, message) {
                    // Reflect that the file upload has resulted in error
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html('(el archivo no pudo ser subido: ' + message + ')');
                });
                resumable.on('fileProgress', function (file) {
                    // Handle progress for both the file and the overall upload
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html(Math.floor(file.progress() * 100) + '%');
                    $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});
                });


            }

        }


    </script>

@endsection

