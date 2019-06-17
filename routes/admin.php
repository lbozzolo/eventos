<?php

Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', [
        'as' => 'admin',
        'uses' => 'HomeController@index'
    ]);

    // Sidebar Web

    Route::resource('users', 'UserController');

    // Editions

    Route::resource('dietas', 'DietaController');

    Route::resource('recetas', 'RecetaController');

    Route::get('recetas/index/list-table', [
        'as' => 'recetas.index.table',
        'uses' => 'RecetaController@indexTable'
    ]);

    Route::get('recetas/agregar-ingredientes/{receta}', [
        'as' => 'recetas.create.ingredientes',
        'uses' => 'RecetaController@createIngredientes'
    ]);

    Route::post('recetas/agregar-ingredientes/{receta}', [
        'as' => 'recetas.store.ingredientes',
        'uses' => 'RecetaController@storeIngredientes'
    ]);

    Route::delete('recetas/quitar-ingredientes/{receta}/{ingrediente}', [
        'as' => 'recetas.destroy.ingrediente',
        'uses' => 'RecetaController@destroyIngredientes'
    ]);

    Route::resource('profiles', 'ProfileController');
    Route::resource('dietascatogenicas', 'DietasCatogenicaController');
    Route::resource('semanas', 'SemanaController');
    Route::resource('dias', 'DiaController');
    Route::resource('comidas', 'ComidaController');

    // Preparaciones

    Route::resource('pasos', 'PasoController');

    Route::get('pasos/create/{receta}', [
        'as' => 'pasos.create',
        'uses' => 'PasoController@create'
    ]);

    Route::post('pasos/create/{receta}', [
        'as' => 'pasos.store',
        'uses' => 'PasoController@store'
    ]);

    // Ingredientes

    Route::resource('ingredientes', 'IngredienteController');

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

