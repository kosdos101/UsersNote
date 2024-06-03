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
        $allnotes = Note::all();
        return view('note.index',compact('allnotes'));
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
        
        return view('note.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        return view('note.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        return view('note.destroy');
    }
}
