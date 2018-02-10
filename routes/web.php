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

/* Blog */
Route::get('/', 'BlogController@index');
Route::get('/contact', 'BlogController@contact');
Route::get('/about', 'BlogController@about');
Route::get('/post/{id}', 'BlogController@post');


/* Auth Generated */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


/* Admin */
Route::get('/admin', 'AdminController@index');
Route::post('/dashboard', 'AdminController@adminLogin');
//Route::get('/dashboard', 'AdminController@adminLogin');


