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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'MentorshipController@category');
Route::post('/store-category', 'MentorshipController@storecategory');

Route::get('/mentor', 'MentorshipController@mentor');
Route::post('/store-mentor', 'MentorshipController@storementor');

Route::get('/users', 'MentorshipController@users');
Route::post('/store-users', 'MentorshipController@storeusers');
