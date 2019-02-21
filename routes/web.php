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


// Routes admin
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/logActivity', 'LogsController@logActivity')
    ->middleware('auth')
    ->middleware('admin')
    ->name('logActivity');
Route::get('/admin/users', 'LogsController@index')->name('admin.users');


// Routes vers traitement fichiers
Route::post('/file/', 'FileController@post')->name('file.post')->middleware('auth');

Route::get('/file/{id}/delete', 'FileController@delete')->name('file.delete');
Route::post('/file/{id}/delete/confirm', 'FileController@delete_confirm')->name('file.confirm');

