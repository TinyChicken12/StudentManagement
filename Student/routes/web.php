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

Route::get('admin/index', 'StudentsController@index');

Route::get('admin/create', 'StudentsController@create');
Route::get('admin/{id}/edit', 'StudentsController@edit');
Route::get('admin/{id}/delete', 'StudentsController@delete');

Route::post('admin/index', 'StudentsController@store');
Route::post('admin/{id}', 'StudentsController@update');
Route::post('admin/{id}/delete', 'StudentsController@destroy');
