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

Route::get('/', 'HomeController@index');
Route::get('/producto/{productId}', 'ProductController@index')->name('product');
Auth::routes();

Route::view('/admin', 'admin')->middleware('admin')->name('admin');


Route::get('/{categorySlug}', 'CategoryController@index')->name('category');


