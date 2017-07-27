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

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/createProduct', 'HomeController@createProduct');
Route::post('/addProduct', 'HomeController@postAddProduct');
Route::get('/viewProduct', 'HomeController@viewProduct');


