<?php

Route::group(['middleware' => ['can:editar_proyectos']], function () {

    Route::resource('proyectos', 'ProyectoController');

    Route::get('proyectos/crear/grupo-de-eventos', [
        'as' => 'proyectos.create.grupo',
        'uses' => 'ProyectoController@createGrupo'
    ]);

    Route::post('proyectos/crear/grupo-de-eventos', [
        'as' => 'proyectos.store.grupo',
        'uses' => 'ProyectoController@storeGrupo'
    ]);


    Route::post('proyectos/{id}/generar-codigos', [
        'as' => 'proyectos.store.codigos',
        'uses' => 'ProyectoController@storeCodigos'
    ]);

    Route::get('proyectos/{id}/finalizar', [
        'as' => 'proyectos.finalizar',
        'uses' => 'ProyectoController@finalizar'
    ]);

    Route::get('proyectos/{id}/activar', [
        'as' => 'proyectos.activar',
        'uses' => 'ProyectoController@activar'
    ]);

    Route::get('proyectos/{id}/imagenes', [
        'as' => 'proyectos.imagenes',
        'uses' => 'ProyectoController@imagenes'
    ]);

    Route::get('proyectos/{id}/iframes', [
        'as' => 'proyectos.iframes',
        'uses' => 'ProyectoController@iframes'
    ]);

    Route::post('proyectos/{id}/iframes', [
        'as' => 'proyectos.store.iframes',
        'uses' => 'ProyectoController@storeIframes'
    ]);

    Route::delete('proyectos/{proyecto}/iframes/{iframe}', [
        'as' => 'proyectos.iframes.destroy',
        'uses' => 'ProyectoController@destroyIframe'
    ]);

    Route::get('proyectos/{id}/videos', [
        'as' => 'proyectos.videos',
        'uses' => 'ProyectoController@videos'
    ]);

    Route::post('proyectos/{id}/videos', [
        'as' => 'proyectos.store.videos',
        'uses' => 'ProyectoController@storeVideos'
    ]);

    Route::delete('proyectos/{proyecto}/videos/{video}', [
        'as' => 'proyectos.videos.destroy',
        'uses' => 'ProyectoController@destroyVideo'
    ]);

    Route::get('proyectos/{id}/pdf', [
        'as' => 'proyectos.pdfs',
        'uses' => 'ProyectoController@pdfs'
    ]);

//    Route::get('proyectos/{id}/inscripciones', [
//        'as' => 'proyectos.inscripciones',
//        'uses' => 'ProyectoController@inscripciones'
//    ]);

    Route::post('proyectos/{id}/consultar', [
        'as' => 'proyectos.store.message',
        'uses' => 'ProyectoController@storeMessage'
    ]);

    Route::post('proyectos/{id}/pdf', [
        'as' => 'proyectos.store.pdf',
        'uses' => 'ProyectoController@storePDF'
    ]);

    Route::get('pdf/{file}', [
        'as' => 'pdf.ver',
        'uses' => 'ImageController@verPdf'
    ]);

    Route::delete('pdf/{id}/destroy', [
        'as' => 'pdf.destroy',
        'uses' => 'ProyectoController@destroyPdf'
    ]);

    Route::get('proyecto/conectados', [
        'as' => 'proyectos.get.connected',
        'uses' => 'ProyectoController@getConnected'
    ]);

    Route::get('proyecto/online-timeline', [
        'as' => 'proyectos.get.online.timeline',
        'uses' => 'ProyectoController@getOnlineTimeline'
    ]);


});


Route::group(['middleware' => ['can:mostrar_proyectos']], function () {

    Route::get('proyectos/{id}/consultas/{sala?}', [
        'as' => 'proyectos.consultas',
        'uses' => 'ProyectoController@consultas'
    ]);

    Route::get('proyectos/{id}/reportes', [
        'as' => 'proyectos.reportes',
        'uses' => 'ProyectoController@reportes'
    ]);

    Route::delete('proyectos/{id}/consultas/eliminar', [
        'as' => 'proyectos.consultas.destroy',
        'uses' => 'ProyectoController@destroyConsulta'
    ]);

    Route::get('proyectos/{id}/consultas/{consultaId}/archivar', [
        'as' => 'proyectos.consultas.archivar',
        'uses' => 'ProyectoController@archivarConsulta'
    ]);

    Route::get('exportacion-inscriptos/{id}', [
        'as' => 'proyectos.export.inscriptos',
        'uses' => 'ProyectoController@exportInscriptos'
    ]);

    Route::get('exportacion-asistentes/{id}', [
        'as' => 'proyectos.export.asistentes',
        'uses' => 'ProyectoController@exportAsistentes'
    ]);

    Route::get('exportacion-consultas/{id}', [
        'as' => 'proyectos.export.consultas',
        'uses' => 'ProyectoController@exportConsultas'
    ]);

    Route::get('exportacion-codigos/{id}', [
        'as' => 'proyectos.export.codigos',
        'uses' => 'ProyectoController@exportCodigos'
    ]);

    Route::get('proyectos/{id}/ver-codigos/{estado?}', [
        'as' => 'proyectos.ver.codigos',
        'uses' => 'ProyectoController@verCodigos'
    ]);

    Route::get('proyectos/{id}/inscripciones', [
        'as' => 'proyectos.inscripciones',
        'uses' => 'ProyectoController@inscripciones'
    ]);

    Route::get('proyectos/{id}/asistencia', [
        'as' => 'proyectos.asistencia',
        'uses' => 'ProyectoController@asistencia'
    ]);

    Route::get('proyectos/{id}/codigo', [
        'as' => 'proyectos.buscar.codigo',
        'uses' => 'ProyectoController@buscarCodigo'
    ]);

    Route::patch('proyectos/{id}/update-questions-max-amount', [
        'as' => 'proyectos.update.cantidad.consultas',
        'uses' => 'ProyectoController@updateCantidadConsultas'
    ]);

    Route::get('proyectos/{id}/consultas-ilimitadas', [
        'as' => 'proyectos.update.consultas.ilimitadas',
        'uses' => 'ProyectoController@updateConsultasIlimitadas'
    ]);

    Route::patch('iframe/{id}/update', [
        'as' => 'proyectos.iframes.update',
        'uses' => 'ProyectoController@updateIframe'
    ]);

    Route::post('proyectos/{id}/buscar-usuario', [
        'as' => 'proyectos.inscripciones.buscar.usuario',
        'uses' => 'ProyectoController@searchUser'
    ]);

    Route::get('proyectos/{id}/encuestas', [
        'as' => 'proyectos.encuestas',
        'uses' => 'ProyectoController@encuestas'
    ]);

//    Route::get('/exportacion-inscriptos/{id}', function () {
//        return \Maatwebsite\Excel\Facades\Excel::download(new \Eventos\Exports\InscriptosExport(), 'inscriptos.xlsx');
//    });

});

