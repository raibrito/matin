<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/products', 'ProductsController@index')->middleware('auth');
Route::get('products/new', 'ProductsController@new')->middleware('auth');
Route::post('products/add', 'ProductsController@add')->middleware('auth');
Route::get('products/{id}/edit', 'ProductsController@edit')->middleware('auth');
Route::post('products/update/{id}', 'ProductsController@update')->middleware('auth');
Route::delete('products/delete/{id}', 'ProductsController@delete')->middleware('auth');


Route::get('/users', 'UserController@index')->middleware('auth');
Route::get('users/new', 'UserController@new')->middleware('auth');
Route::post('users/add', 'UserController@add')->middleware('auth');
Route::get('users/{id}/edit', 'UserController@edit')->middleware('auth');
Route::post('users/update/{id}', 'UserController@update')->middleware('auth');
Route::delete('users/delete/{id}', 'UserController@delete')->middleware('auth');


