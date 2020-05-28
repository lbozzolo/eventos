<?php

Route::group(['middleware' => ['can:editar_proyectos']], function () {

    Route::resource('proyectos', 'ProyectoController');

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

    Route::get('proyectos/{id}/inscripciones', [
        'as' => 'proyectos.inscripciones',
        'uses' => 'ProyectoController@inscripciones'
    ]);

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

    Route::get('proyectos/{id}/consultas', [
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

    Route::get('proyectos/{id}/consultas/archivar', [
        'as' => 'proyectos.consultas.archivar',
        'uses' => 'ProyectoController@archivarConsulta'
    ]);

});

