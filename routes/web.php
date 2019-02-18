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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-to-log', 'LogsController@testAddLog');
Route::get('/admin/logActivity', 'LogsController@logActivity')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/users', 'LogsController@index')->name('admin.users');

Route::get('/file/', 'FileController@index')->name('file.index')->middleware('auth');
Route::post('/file/', 'FileController@post')->name('file.post')->middleware('auth');

