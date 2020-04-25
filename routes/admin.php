<?php

Auth::routes();


Route::group(['middleware' => 'auth'], function () {


    Route::group(['middleware' => ['role:Admin|Superadmin']], function () {

        require(__DIR__ . '/system/roles.php');
        require(__DIR__ . '/system/permissions.php');

        Route::get('/admin', [
            'as' => 'admin',
            'uses' => 'HomeController@index'
        ]);

        // Users
        Route::resource('users', 'UserController');

        Route::post('usuarios/{id}/editar-roles', [
            'as' => 'users.edit.roles',
            'uses' => 'UserController@editarRoles'
        ]);

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

        // Headers
        Route::get('header/{id}', [
            'as' => 'headers.show',
            'uses' => 'HeaderController@show'
        ]);

        Route::get('header/{id}/edit', [
            'as' => 'headers.edit',
            'uses' => 'HeaderController@edit'
        ]);

        // Proyectos
        Route::resource('proyectos', 'ProyectoController');

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
            'uses' => 'ProyectoController@destroyVideos'
        ]);

        Route::get('proyectos/{id}/pdf', [
            'as' => 'proyectos.pdfs',
            'uses' => 'ProyectoController@pdfs'
        ]);

        Route::get('proyectos/{id}/inscripciones', [
            'as' => 'proyectos.inscripciones',
            'uses' => 'ProyectoController@inscripciones'
        ]);

        Route::post('proyectos/{id}/pdf', [
            'as' => 'proyectos.store.pdf',
            'uses' => 'ProyectoController@storePDF'
        ]);

        Route::get('pdf/{file}', [
            'as' => 'pdf.ver',
            'uses' => 'ImageController@verPdf'
        ]);

        // Categorias
        Route::resource('categorias', 'CategoriaController');

        // Estados
        Route::resource('estados', 'EstadoController');

        // Clientes
        Route::resource('clientes', 'ClienteController');

        // Auspiciantes
        Route::resource('auspiciantes', 'AuspicianteController');

        // Newsletter
        Route::get('newsletter', [
            'as' => 'newsletter.index',
            'uses' => 'NewsletterController@index'
        ]);

        Route::delete('newsletter/{id}/eliminar', [
            'as' => 'newsletter.destroy',
            'uses' => 'NewsletterController@destroy'
        ]);

        // Sliders
        Route::resource('sliders', 'SliderController');

        // Imágenes
        Route::get('imagenes/{file}', [
            'as' => 'imagenes.ver',
            'uses' => 'ImageController@verImage'
        ]);

        Route::get('cover/{file}', [
            'as' => 'cover.ver',
            'uses' => 'ImageController@verCover'
        ]);

        Route::get('pdf/{file}', [
            'as' => 'pdf.ver',
            'uses' => 'ImageController@verPdf'
        ]);

        Route::get('social&medias', [
            'as' => 'images.index',
            'uses' => 'ImageController@index'
        ]);

        Route::post('imagenes/{id}/{class}', [
            'as' => 'images.save',
            'uses' => 'ImageController@storeImage'
        ]);

        Route::post('imagenes/store', [
            'as' => 'images.store',
            'uses' => 'ImageController@store'
        ]);

        Route::delete('imagenes/{id}/destroy', [
            'as' => 'images.destroy',
            'uses' => 'ImageController@destroy'
        ]);

        Route::post('/{id}/{class}/demos/jquery-image-upload', [
            'as' => 'subir.imagen',
            'uses' => 'ImageController@saveJqueryImageUpload'
        ]);

        Route::post('/{type}/demos/jquery-image-upload', [
            'as' => 'subir.imagen.sin.modelo',
            'uses' => 'ImageController@saveWithoutModel'
        ]);

        Route::get('imagenes/{id}/{class}/{imagen}/principal', [
            'as' => 'images.main',
            'uses' => 'ImageController@principalImage',
        ]);

        Route::get('sliders/{id}/activate', [
            'as' => 'sliders.activate',
            'uses' => 'SliderController@activate'
        ]);

    });





});

