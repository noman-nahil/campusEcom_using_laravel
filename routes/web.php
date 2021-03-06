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

Route::get('/','homeController@index');//->name('home.index');
Route::get('/login','loginController@index')->name('login');

Route::post('/login','loginController@verify');
Route::get('/admin','adminController@adminDash')->name('admin.index');


Route::get('/register','registerController@index')->name('register');
Route::post('/register','registerController@signUp')->name('register');
Route::get('/adminLogin','adminController@index')->name('adminLogin');
Route::post('/adminLogin','adminController@verify')->name('adminLogin');

