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


    Route::resource('rooms', 'RoomController');

    Route::get('rooms/create/{type}', [
        'as' => 'rooms.create',
        'uses' => 'RoomController@create'
    ]);

    Route::get('rooms/index/list-table', [
        'as' => 'rooms.index.table',
        'uses' => 'RoomController@indexTable'
    ]);

    // Ingredientes

    Route::resource('services', 'ServiceController');

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

