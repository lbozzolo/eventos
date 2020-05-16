<?php

Route::group(['middleware' => ['can:mostrar_usuarios']], function () {

    Route::resource('users', 'UserController');

    Route::group(['middleware' => ['can:mostrar_roles']], function () {

        Route::post('usuarios/{id}/editar-roles', [
            'as' => 'users.edit.roles',
            'uses' => 'UserController@editarRoles'
        ]);

    });

    Route::delete('inscriptos/{id}/eliminar', [
        'as' => 'users.destroy.inscripto',
        'uses' => 'UserController@destroyInscripto'
    ]);

});

Route::group(['middleware' => ['can:cambiar_password']], function () {

    Route::put('usuarios/{id}/cambiar-contrasena', [
        'as' => 'users.change.password',
        'uses' => 'UserController@changePassword'
    ]);

});
