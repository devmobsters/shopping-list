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

Route::get('/products/index', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create');
Route::post('products/index', 'ProductController@store');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

