<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes', ['notes' => $notes]);
    }

    public function details($id)
    {
        $note = Note::find($id);

        return view('note-details', ['note' => $note]);
    }

    public function create()
    {
        return view('note-new');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        
        return view('note-edit', ['note' => $note]);
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

    public function update(Note $note, Request $request)
    {
        $request->validate([
            'title' => ['required', Rule::unique('notes')->ignore($note)],
            'content' => 'required',
        ]);

        $note->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        
        
        return redirect("edit/{$note->id}");
    }

    public function destroy($id)
    {
        $note = Note::find($id);

        $note->delete();

        return redirect('/');
    }
}
