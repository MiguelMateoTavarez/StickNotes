<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notas', ['notes' => $notes]);
    }

    public function create()
    {
        return view('nota-nueva');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Note::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        
        return view('nota-editar', ['note' => $note]);
    }
}
