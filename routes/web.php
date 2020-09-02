<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', [
    'as' => 'test',
    'uses' => 'WebController@test'
]);

require(__DIR__ . '/admin.php');


Route::get('/', function () {
    return redirect('home');
});

Route::get('home', function () {
    return redirect('web');
});



Route::get('/', [
    'as' => 'home',
    'uses' => 'WebController@index'
]);

Route::get('eventos', [
    'as' => 'web.charlas',
    'uses' => 'WebController@charlas'
]);

Route::get('eventos/{cliente}/{evento}/{id}', [
    'as' => 'web.charlas.show',
    'uses' => 'WebController@showCharla'
]);

Route::get('events/{cliente}/{evento}/{id}', [
    'as' => 'web.grupos.show',
    'uses' => 'WebController@showGrupo'
]);

Route::get('eventos/{cliente}/{evento}/{id}/ingresar', [
    'as' => 'web.charlas.ingresar',
    'uses' => 'WebController@ingresarCharla'
]);

Route::get('eventos/{cliente}/{evento}/{id}/ingresar-codigo', [
    'as' => 'web.charlas.ingresar.codigo',
    'uses' => 'WebController@ingresarCodigo'
]);

Route::post('eventos/{id}/ingresar-codigo', [
    'as' => 'web.charlas.check.codigo',
    'uses' => 'WebController@checkCodigo'
]);

Route::get('eventos/{cliente}/{evento}/{id}/{codigo}/identificacion', [
    'as' => 'web.charlas.identificacion',
    'uses' => 'WebController@identificacion'
]);

Route::post('eventos/{id}/identificacion', [
    'as' => 'web.charlas.store.identificacion',
    'uses' => 'WebController@storeIdentificacion'
]);

Route::get('eventos/{cliente}/{evento}/{id}/inscripcion', [
    'as' => 'web.charlas.inscripcion',
    'uses' => 'WebController@inscripcion'
]);

Route::get('eventos/{cliente}/{evento}/{id}/inscription', [
    'as' => 'web.grupos.inscripcion',
    'uses' => 'WebController@gruposInscripcion'
]);

Route::get('eventos/{cliente}/{evento}/{id}/registro', [
    'as' => 'web.charlas.registro',
    'uses' => 'WebController@registro'
]);

Route::get('eventos/{cliente}/{evento}/{id}/register', [
    'as' => 'web.grupos.registro',
    'uses' => 'WebController@gruposRegistro'
]);

Route::post('eventos/{id}/registro', [
    'as' => 'web.post.registro',
    'uses' => 'WebController@postRegistro'
]);

Route::post('eventos/{id}/registro-grupo', [
    'as' => 'web.post.registro.grupo',
    'uses' => 'WebController@postRegistroGrupo'
]);

Route::post('eventos/{id}/registro-grupo-logueado', [
    'as' => 'web.post.registro.grupo.logueado',
    'uses' => 'WebController@postRegistroGrupoLogueado'
]);

Route::get('evento-inscripcion/{userId}/{eventoId}', [
    'as' => 'web.get.registro',
    'uses' => 'WebController@getRegistro2'
]);

Route::post('eventos/{id}/registro-e-inscripcion', [
    'as' => 'web.post.registro.2',
    'uses' => 'WebController@postRegistro2'
]);

Route::get('iniciar-sesion/{cliente?}/{evento?}/{id?}', [
    'as' => 'web.iniciar-sesion',
    'uses' => 'WebController@iniciarSesion'
]);

Route::get('iniciarsesion/{cliente?}/{evento?}/{id?}', [
    'as' => 'web.iniciar.sesion.grupo',
    'uses' => 'WebController@iniciarSesionGrupo'
]);

Route::post('ingresar/{charla?}', [
    'as' => 'web.login',
    'uses' => 'WebController@login'
]);

Route::post('entrar/{charla?}', [
    'as' => 'web.post.sesion.grupo',
    'uses' => 'WebController@postSesionGrupo'
]);

Route::get('eventos/{id}/encuestas', [
    'as' => 'web.encuestas',
    'uses' => 'WebController@encuestas'
]);

Route::post('eventos/{id}/encuestas-responder', [
    'as' => 'web.encuestas.responder',
    'uses' => 'WebController@encuestasResponder'
]);

Route::get('nosotros', [
    'as' => 'web.nosotros',
    'uses' => 'WebController@nosotros'
]);

Route::get('contactanos', [
    'as' => 'web.contactanos',
    'uses' => 'WebController@contactanos'
]);

Route::post('post-contact/send/email', [
    'as' => 'web.post.contact',
    'uses' => 'WebController@postContact'
]);

Route::post('newsletter', [
    'as' => 'web.newsletter',
    'uses' => 'WebController@newsletter'
]);

Route::post('proyectos/{id}/consultar', [
    'as' => 'proyectos.store.message',
    'uses' => 'ProyectoController@storeMessage'
]);

Route::post('consultar', [
    'as' => 'proyectos.store.consulta',
    'uses' => 'ProyectoController@storeConsulta'
]);

Route::post('get-alert-message', [
    'as' => 'proyectos.get.alert.message',
    'uses' => 'ProyectoController@getAlertMessage'
]);

Route::post('reenvio-de-datos', [
    'as' => 'users.reenvio.de.datos',
    'uses' => 'UserController@reenvioDeDatos'
]);

Route::get('/home', 'WebController@index');










