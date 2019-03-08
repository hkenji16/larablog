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

Route::get('/', 'HomeController@index');
Route::get('/articles', 'HomeController@articles');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@store');

Route::get('/articles/{post_name}', 'PostsController@show');
Route::post('/articles/{post_name}', 'PostsController@store');

Route::resource('admin/articles','ArticlesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
