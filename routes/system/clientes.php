<?php

Route::group(['middleware' => ['can:mostrar_clientes']], function () {

    Route::resource('clientes', 'ClienteController');

});

Route::group(['middleware' => ['can:mostrar_perfil_cliente']], function () {

    Route::get('perfil/{id?}', [
        'as' => 'clientes.profile',
        'uses' => 'ClienteController@profile'
    ]);

    Route::get('proyecto/{id}/transmision', [
        'as' => 'clientes.proyecto.iframe',
        'uses' => 'ClienteController@proyectoIframe'
    ]);

    Route::get('proyecto/{id}/inscripciones', [
        'as' => 'clientes.proyecto.inscripciones',
        'uses' => 'ClienteController@proyectoInscripciones'
    ]);

});