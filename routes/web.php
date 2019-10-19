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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');

Route::get('/category/menClothing','CategoryController@menClothing');

Route::get('/category/womenClothing','CategoryController@womenClothing');

Route::get('/category/single','CategoryController@single');

Route::get('/category/shortCode','CategoryController@shortCode');

Route::get('/category/contact','CategoryController@contact');

Route::get('/category/electronics','CategoryController@electronics');

Route::get('/category/checkout','CategoryController@checkout');