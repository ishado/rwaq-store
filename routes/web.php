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

// Route::view('/master', 'front.index');


Route::get('/', 'HomePageController@index')->name('index');

Route::get('/category/{id}', 'HomePageController@adsByCategory');

Route::group(['prefix' => 'product'], function () {

    Route::get('/show/{id}', 'HomePageController@showProduct')->name('product.show');
    Route::get('/add','PostController@create')->name('product.add');
    Route::post('/add','PostController@store');

});


Auth::routes();

/* ##################### Begin Backend ##################### */

Route::group(['prefix' => 'admin', 'middleware' => 'isadmin'], function () {

    Route::resource('/post', 'admin\PostController');
    // Route::resource('/admin/post', 'admin\PostController')->middleware('isadmin');

});

/* ##################### End Backend ##################### */


// Route::get('/home', 'HomeController@index')->name('home');




