<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload_foto', 'HomeController@upload_foto');
Route::get('/struktur_organisasi', 'HomeController@struktur_organisasi');
Route::get('/visi_misi', 'HomeController@visi_misi');
Route::get('/data_statistik', 'HomeController@data_statistik');

Route::get('/perpeka_visi_misi', 'ClientController@perpeka_visi_misi');

