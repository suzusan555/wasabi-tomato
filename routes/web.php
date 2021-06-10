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
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/search', 'ProductController@search')->name('products.search');
Route::get('/products/index', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::get('/product/show/{id}', 'ProductController@show')->name('product.show');
