<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda. Ini route 
|dimuat oleh RouteServiceProvider dalam grup yang berisi grup middleware 
|"web".
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/pesdik/form_daftar','PesdikController@form_daftar');
Route::get('/pesdik/lihat_pendaftar','PesdikController@lihat_pendaftar');
Route::get('/pesdik/alur_pendaftaran','PesdikController@alur_pendaftaran');
Route::post('/pesdik/daftar','PesdikController@daftar');
Route::get('/pesdik/{id}/detail','PesdikController@detail');
Route::get('/pesdik/export', 'PesdikController@export');