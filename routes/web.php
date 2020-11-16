<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('', 'HomeController@index')->name('home.index');
Route::get('/category{category}', 'CategoryController@index')->name('category.index');
Route::get('/product{product}', 'ProductController@index')->name('product.index');
Route::get('/create', 'HomeController@create')->name('home.create');
Route::POST('/store', 'HomeController@store')->name('home.store');
Route::get('/delete{product}', 'HomeController@delete')->name('home.delete');

