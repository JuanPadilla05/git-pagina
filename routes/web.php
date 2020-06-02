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
|*/


//Route::get('/','PagesController@welcome');

Route::get('/','PagesController@index')->name('inicio');

Route::get('nosotros','PagesController@about')->name('nosotro');

Route::get('login','PagesController@login')->name('loginn');

Route::get('products','PagesController@products')->name('productos');

Route::get('register','PagesController@register')->name('registro');

Route::get('services','PagesController@services')->name('servicios');

Route::get('contac','PagesController@contac')->name('contactos');

//https://www.youtube.com/watch?v=kjnwHskKe0E
//https://www.youtube.com/watch?v=CWcRoW3W_ys
//https://blog.pusher.com/ecommerce-laravel-vue-part-1/
