<?php

Route::group(['middleware' => ['can:mostrar_inscriptos']], function () {

    Route::get('inscripciones', [
        'as' => 'users.inscripciones',
        'uses' => 'UserController@inscripciones'
    ]);

    Route::post('inscripciones-por-proyecto', [
        'as' => 'users.inscripciones.buscar',
        'uses' => 'UserController@inscripcionesBuscar'
    ]);

    Route::get('inscribir', [
        'as' => 'users.inscribir',
        'uses' => 'UserController@inscribir'
    ]);

    Route::get('inscripciones/{id}/show', [
        'as' => 'users.inscripciones.show',
        'uses' => 'UserController@inscripcionesShow'
    ]);

    Route::get('inscripciones/{id}/edit', [
        'as' => 'users.inscripciones.edit',
        'uses' => 'UserController@inscripcionesEdit'
    ]);

    Route::patch('inscripciones/{id}/update', [
        'as' => 'users.inscripciones.update',
        'uses' => 'UserController@inscripcionesUpdate'
    ]);

    Route::post('inscripciones/inscribir', [
        'as' => 'users.inscripciones.store',
        'uses' => 'UserController@storeInscripciones'
    ]);

});