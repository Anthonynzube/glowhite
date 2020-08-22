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
Route::get('/moisturizers/{product}/show', 'ProductController@showMoisturizer')->name('showMoisturizer');

Route::get('/serums', 'PageController@serums')->name('serums');
Route::get('/serums/{product}/show', 'ProductController@showSerum')->name('showSerum');

Route::get('/cleansers', 'PageController@cleansers')->name('cleansers');
Route::get('/cleansers/{product}/show', 'ProductController@showCleanser')->name('showCleanser');

Route::get('/toolkit', 'PageController@toolkit')->name('toolkit');
Route::get('/toolkit/{product}/show', 'ProductController@showToolkit')->name('showToolkit');