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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/products/create', 'ProductController@get_Create')->name('product_create');
Route::post('/products/create', 'ProductController@post_Create')->name('product_create');

Route::get('/products/edit/{id}', 'ProductController@get_Edit')->name('product_edit');
Route::post('/products/edit/{id}', 'ProductController@post_Edit')->name('product_edit');

Route::get('/products/list_product', 'ProductController@List_Product')->name('product_list');

Route::get('/products/delete/{id}', 'ProductController@Delete_Product');