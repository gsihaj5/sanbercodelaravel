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

Route::get('/master', function(){
    return view('/adminlte/master');
});

Route::get('/', function(){
    return view('tasks/index');
});

Route::get('/pertanyaan', "PertanyaanController@index");
Route::post('/pertanyaan', "PertanyaanController@store");
Route::get('/pertanyaan/create', "PertanyaanController@create");

Route::get('/pertanyaan/{pertanyaan_id}', "PertanyaanController@show");
Route::get('/pertanyaan/{pertanyaan_id}/edit', "PertanyaanController@edit");
Route::put('/pertanyaan/{pertanyaan_id}', "PertanyaanController@update");

Route::delete('/pertanyaan/{pertanyaan_id}', "PertanyaanController@destroy");


Route::get('/data-tables', function(){
    return view('dataTables/index');
});


