<?php

Route::group(['middleware' => ['can:mostrar_categorias']], function () {

    Route::resource('categorias', 'CategoriaController');

});

