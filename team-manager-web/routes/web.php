<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', 'App\Http\Controllers\Admin\AdminController@index')->name('listOfTeam');
Route::get('/listOfTeam', 'App\Http\Controllers\Admin\AdminController@index')->name('listOfTeam');
Route::get('/AddTeam', 'App\Http\Controllers\Admin\AdminController@addTeam')->name('AddTeam');
Route::post('/AddDB', 'App\Http\Controllers\Admin\AdminController@AddDB')->name('AddDB');
Route::get('/edit/{id}', 'App\Http\Controllers\Admin\AdminController@editTeam')->name('EditTeam');
Route::post('/UpdateDB/{id}', 'App\Http\Controllers\Admin\AdminController@UpdateDB')->name('UpdateDB');
Route::get('/delete/{id}', 'App\Http\Controllers\Admin\AdminController@DeleteTeam')->name('DeleteTeam');

Route::get('/export', 'App\Http\Controllers\ExportController@export')->name('export');
