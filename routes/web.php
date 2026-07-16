<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@index');
Route::post('/search', 'App\Http\Controllers\BuscadorController@search');
