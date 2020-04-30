<?php

Route::group(['middleware' => ['can:mostrar_auspiciantes']], function () {

    Route::resource('auspiciantes', 'AuspicianteController');

});

