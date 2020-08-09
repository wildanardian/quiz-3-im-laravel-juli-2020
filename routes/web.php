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

Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id

Route::get('/', function(){
    return view('welcome');
});
Route::get('/proyek', 'PerusahaanController@index');
Route::get('/proyek/create', 'PerusahaanController@create');
Route::post('/proyek', 'PerusahaanController@store');
Route::get('/proyek/{id}/daftarkan-staff', 'PerusahaanController@join');
Route::post('/proyek/{id}/daftarkan-staff', 'PerusahaanController@save');
Route::get('/proyek/{id}/edit', 'PerusahaanController@edit');
Route::put('/proyek/{id}', 'PerusahaanController@update');
Route::delete('/proyek/{id}', 'PerusahaanController@delete');