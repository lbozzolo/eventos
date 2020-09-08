<?php

Route::group(['middleware' => ['can:mostrar_proyectos']], function () {

    Route::resource('material', 'MaterialController');

    Route::get('material-pdf/{file}', [
        'as' => 'material.pdf.ver',
        'uses' => 'MaterialController@verPdf'
    ]);

});

