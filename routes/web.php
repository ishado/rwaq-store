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

Route::view('/master', 'front.index');


Route::get('/', 'HomePageController@index')->name('index');

Route::get('/category/{id}', 'HomePageController@adsByCategory');

Route::get('/add','PostController@create');

Route::post('/add','PostController@store');

Route::get('/addDetails/{id}', 'HomePageController@adsDetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/post', 'admin\PostController')->middleware('isadmin');



