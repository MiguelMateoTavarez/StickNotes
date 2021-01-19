<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Note;
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

Route::get('/nota/{id}', function($id){
    return 'Aquí podemos ver el detalle de la nota: '.$id;
});

Route::get('/editar/{id}', 'NoteController@edit')->name('edit');

Route::get('crear', 'NoteController@create')->name('crear');

Route::post('notas', 'NoteController@store')->name('store');
