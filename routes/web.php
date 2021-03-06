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

Route::get('/', function () {
    return view('webSit.index');
});

Auth::routes();
Route::get('user/login','FrontEndController@login')->name('login.form');

Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('banner','BannerController');
Route::resource('level','LevelController');
Route::resource('conference','ConferenceController');
Route::resource('lesson','LessonController');
