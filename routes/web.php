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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/tambah', 'AdminController@tambahCalon')->middleware('is_admin');
Route::get('admin/list', 'AdminController@list')->middleware('is_admin');
Route::get('admin/calon/edit/{id}', 'AdminController@edit')->middleware('is_admin');
Route::get('admin/calon/details/{id}', 'AdminController@details')->middleware('is_admin');
Route::get('/admin/calon/hapus/{id}', 'AdminController@hapus')->middleware('is_admin');;

Route::post('/admin/upload', 'AdminController@upload');
Route::post('/admin/update', 'AdminController@update');
