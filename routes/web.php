<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'PageController@coming');

Route::get('/beta', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/instagram', 'PageController@instagram')->name('instagram');
Route::get('/moisturizers', 'PageController@moisturizers')->name('moisturizers');
Route::get('/serums', 'PageController@serums')->name('serums');
Route::get('/cleansers', 'PageController@cleansers')->name('cleansers');
Route::get('/toolkit', 'PageController@toolkit')->name('toolkit');

