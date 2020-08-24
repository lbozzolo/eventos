<?php

Route::group(['middleware' => ['can:mostrar_usuarios']], function () {

    Route::resource('users', 'UserController');

    Route::group(['middleware' => ['can:mostrar_roles']], function () {

        Route::post('usuarios/{id}/editar-roles', [
            'as' => 'users.edit.roles',
            'uses' => 'UserController@editarRoles'
        ]);

    });

    Route::get('usuarios-buscar', [
        'as' => 'users.search',
        'uses' => 'UserController@search'
    ]);

    Route::delete('usuarios/{id}/destruir', [
        'as' => 'users.destruir',
        'uses' => 'UserController@destruir'
    ]);
    
    Route::get('usuario-conectado', [
        'as' => 'users.is.connected',
        'uses' => 'UserController@isConnected'
    ]);

});

Route::post('inscriptos/{id}/eliminar', [
    'as' => 'users.remove.inscripto',
    'uses' => 'UserController@removeInscripto'
])->middleware('can:eliminar_inscriptos');

Route::group(['middleware' => ['can:cambiar_password']], function () {

    Route::put('usuarios/{id}/cambiar-contrasena', [
        'as' => 'users.change.password',
        'uses' => 'UserController@changePassword'
    ]);

});
