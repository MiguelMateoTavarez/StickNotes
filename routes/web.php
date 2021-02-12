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

Route::get('/', 'NoteController@index')->name('home');

Route::get('note/{id}', 'NoteController@details')->name('details');

Route::get('edit/{id}', 'NoteController@edit')->name('edit');

Route::get('create', 'NoteController@create')->name('create');

Route::post('notes', 'NoteController@store')->name('store');

Route::put('note/{note}', 'NoteController@update')->name('update');

Route::get('note/{id}', 'NoteController@destroy')->name('destroy');
