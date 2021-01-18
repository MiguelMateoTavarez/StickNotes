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

    $notes = [
        'Mi primeta nota',
        'Mi segunda nota',
        'Mi tercera nota',
        'Mi cuarta nota'
    ];

    return view('notas', ['notes' => $notes]);
})->name('home');

Route::get('crear', function () {
    return view('nota-nueva');
})->name('crear');

Route::get('/editar/{id}', function($id) {
    return 'Aquí podemos editar la nota: '.$id;
})->where('id', '\d+');

Route::get('/nota/{id}', function($id){
    return 'Aquí podemos ver el detalle de la nota: '.$id;
});

