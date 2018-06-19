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

Route::get('/', function () {
    return view('welcome');
});


Route::Resource('empleados', 'EmpleadoController');

/*Route::get('empleados/{id}/destroy',[
    'uses' =>'EmpleadoController@destroy',
    'as'   =>'prueba.destroy'
]);*/



//Route::get('empleados', 'EmpleadoController@index')->name('empleados');
//Route::delete('/empleados/{id}', 'EmpleadoController@destroy')->name('empleados-delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
