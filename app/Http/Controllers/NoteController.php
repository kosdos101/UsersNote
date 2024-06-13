<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allnotes = Note::latest()->paginate(15);
        return view('note.index',['allnotes' => $allnotes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required|max:50',
           'note'=> 'required|max:400',
           'user_id'=> 'required|exists:users,id' 
        ]);
        $input = $request->all();
        $note = Note::create($input);
        return to_route('notes.show',compact('note'))->with('success','Note Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note.edit',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|max:50',
            'note'=> 'required|max:400',
            'user_id'=> 'required|exists:users,id' 
         ]);
        $note->update($request->all());
        return redirect()->route('notes.show',compact('note'))->with('success','Note Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return to_route('notes.index');
    }
}
