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

Route::get('/', 'productController@home');

Route::get('/products', 'productController@viewProduct');

Route::get('/edit/{id}', 'productController@edit');

Route::post('/store', 'productController@store');

Route::patch('/update/{id}', 'ProductController@update');

Route::delete('/delete/{id}', 'ProductController@delete');

