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
Route::get('/', 'App\Http\Controllers\UtamaController@index');
Route::post('/pushData', 'App\Http\Controllers\UtamaController@store');
Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/register', 'App\Http\Controllers\LoginController@register');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
Route::post('/AddCart', 'App\Http\Controllers\OrderController@order');
Route::get('/keranjang', 'App\Http\Controllers\OrderController@keranjang');
Route::post('/keranjang', 'App\Http\Controllers\OrderController@checkout');
Route::get('/checkout', 'App\Http\Controllers\OrderController@checkout_list');
Route::get('/confirm', 'App\Http\Controllers\OrderController@confirm');
Route::post('/confirm', 'App\Http\Controllers\OrderController@confirm_save');






