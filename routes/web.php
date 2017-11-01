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

Auth::routes();

Route::get('/home', function () {
    return redirect()->route('products.index');
})->name('home');

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create');
Route::post('products', 'ProductController@store');
Route::get('/products/edit/{id}', 'ProductController@edit');
Route::patch('/products/edit/{id}', 'ProductController@update');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

