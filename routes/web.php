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
/*
    ====================Main Pages Route for Main Template ======================
*/
    
Route::get('/', function () {
    return view('frontEnd.home.homeContent');
});

// Route::get('/', 'HomeController@main');

// Route::get('/', 'HomeController@index');

// Route::get('/', 'AdminController@homeContent');

// Route::get('/admin', 'AdminController@homeContent');

Route::get('/category/menClothing','CategoryController@menClothing');

Route::get('/category/womenClothing','CategoryController@womenClothing');

Route::get('/category/single','CategoryController@single');

Route::get('/category/shortCode','CategoryController@shortCode');

Route::get('/category/contact','CategoryController@contact');

Route::get('/category/electronics','CategoryController@electronics');

Route::get('/category/checkout','CategoryController@checkout');



/*
    ==================== Extra Category Route for Main Template ======================
*/
// Route::post('/category/entry','CategoryController@categoryEntry');
Route::get('/category/add','CategoryController@categoryAdd');
Route::get('/category/show','CategoryController@categoryShow');
Route::get('/category/edit/{id}','CategoryController@categoryEdit');
Route::post('/category/update','CategoryController@categoryUpdate');
Route::get('/category/delete/{delete_id}','CategoryController@categoryDelete');


/*
    ====================Admin Panel Dashboard category Route ======================
*/

    
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/dashboard/add', 'HomeController@add')->name('dashboard');
Route::post('/dashboard/entry','HomeController@entry')->name('dashboard');
Route::get('/dashboard/show', 'HomeController@show')->name('dashboard');
// Route::get('/dashboard/edit', 'HomeController@categoryEdit')->name('dashboard');
Route::get('/dashboard/edit/{id}','HomeController@edit')->name('dashboard');
Route::post('/dashboard/update','HomeController@update')->name('dashboard');
Route::get('/dashboard/delete/{delete_id}','HomeController@delete')->name('dashboard');
Route::get('/status/edit/{pbs_id}','HomeController@categoryPBS');


/*
    ====================Product Category Route for Main Template ======================
*/
Route::post('/product/entry','ProductController@productEntry');
Route::get('/product/add','ProductController@productAdd');
Route::get('/product/show','ProductController@productShow');
Route::get('/product/edit/{id}','ProductController@productEdit');
// Route::post('/product/update','ProductController@productUpdate');
Route::get('/product/delete/{delete_id}','ProductController@productDelete');