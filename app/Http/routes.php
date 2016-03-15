<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('controlador','PruebaController@index');
Route::get('controlador/{nombre}', 'PruebaController@nombre');
Route::resource('libro','LibroController');*/

Route::get('/','FrontController@index');



Route::get('prueba',function(){
        return "Hola desde ruta";

});
