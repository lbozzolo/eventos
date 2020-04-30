<?php

Route::group(['middleware' => ['can:mostrar_clientes']], function () {

    Route::resource('clientes', 'ClienteController');

});

Route::group(['middleware' => ['can:mostrar_perfil_cliente']], function () {
    Route::get('perfil/{id?}', [
        'as' => 'clientes.profile',
        'uses' => 'ClienteController@profile'
    ]);
});