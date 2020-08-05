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

//Route::get('/', 'HomeController@index')->name('index');
//Route::get('/register', 'AuthController@index')->name('index');

//Route::get('/welcome', 'WelcomeController@index')->name('index');
//Route::post('/welcome', 'WelcomeController@index')->name('index');
Route::get('/master', function(){
    return view('/adminlte/master');
});

Route::get('/', function(){
    return view('tasks/index');
});

Route::get('/data-tables', function(){
    return view('dataTables/index');
});
