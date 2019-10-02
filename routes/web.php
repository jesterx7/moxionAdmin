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
    return view('index');
});

Route::get('/forms', 'AdminController@forms');
Route::get('/tambah_barang', 'AdminController@tambah_barang');
Route::get('/list_barang', 'AdminController@list_barang');
Route::get('/login', 'AdminController@login_view');
Route::get('/sign_up', 'AdminController@sign_up');

Route::post('/tambah_barang', 'AdminController@submit_tambah_barang');