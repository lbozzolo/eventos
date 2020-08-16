<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['role:Admin|Superadmin|Cliente']], function () {

        Route::get('/admin', [
            'as' => 'admin',
            'uses' => 'HomeController@index'
        ]);

        require(__DIR__ . '/system/roles.php');
        require(__DIR__ . '/system/permissions.php');
        require(__DIR__ . '/system/usuarios.php');
        require(__DIR__ . '/system/proyectos.php');
        require(__DIR__ . '/system/clientes.php');
        require(__DIR__ . '/system/imagenes.php');
        require(__DIR__ . '/system/newsletter.php');
        require(__DIR__ . '/system/auspiciantes.php');
        require(__DIR__ . '/system/inscripciones.php');
        require(__DIR__ . '/system/headers.php');
        require(__DIR__ . '/system/categorias.php');
        require(__DIR__ . '/system/estados.php');
        require(__DIR__ . '/system/encuestas.php');
        require(__DIR__ . '/system/preguntas.php');
        require(__DIR__ . '/system/opciones.php');
        require(__DIR__ . '/system/ocupaciones.php');

    });

});