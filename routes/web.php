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

Route::get('/test', 'App\Http\Controllers\MyController@index');


Route::get('/about', function () {
    return view('about', ['name' => 'Học Web Chuẩn']);
});

Route::get('/news', 'App\Http\Controllers\NewsController@index');

Route::get('/', function () {
    return view('welcome');
});
