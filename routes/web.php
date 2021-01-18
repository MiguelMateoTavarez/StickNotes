<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {

    $notes = Note::all();

    return view('notas', ['notes' => $notes]);
})->name('home');

Route::get('/nota/{id}', function($id){
    return 'Aquí podemos ver el detalle de la nota: '.$id;
});

Route::get('crear', function () {
    return view('nota-nueva');
})->name('crear');

Route::post('notas', function(Request $request) {

    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    Note::create([
        'title' => $request->input('title'),
        'content' => $request->input('content')
    ]);

    return redirect('/');
});

Route::get('/editar/{id}', function($id) {
    $note = Note::find($id);

    return ['note' => $note];

    return 'Aquí podemos editar la nota: '.$id;
})->where('id', '\d+');


