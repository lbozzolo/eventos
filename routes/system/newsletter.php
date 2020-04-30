<?php

Route::group(['middleware' => ['can:mostrar_newsletter']], function () {

    Route::get('newsletter', [
        'as' => 'newsletter.index',
        'uses' => 'NewsletterController@index'
    ]);

    Route::delete('newsletter/{id}/eliminar', [
        'as' => 'newsletter.destroy',
        'uses' => 'NewsletterController@destroy'
    ]);

});