<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre; // Assuming you have a Genre model
use App\Models\Record; // Assuming you have a Record model

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('records.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->all();

    $newRecord = new Record();
    $newRecord->title = $data['title'];
    $newRecord->artist = $data['artist'];
    $newRecord->genre_id = $data['genre_id'];
    $newRecord->year = $data['year'];
    $newRecord->cover_image = null; // Default value if no image is uploaded

    if ($request->hasFile('cover_image')) {
        $path = $request->file('cover_image')->store('covers', 'public');
        $newRecord->cover_image = $path; // ✅ salva il path nel database
    }

    $newRecord->save();

    return redirect()->route('records.index')->with('message', 'Record created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        return view('records.show', compact('record'));        
    }
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        $genres = Genre::all();
        return view('records.edit', compact('record', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        $data = $request->all();

        $record->title = $data['title'];
        $record->artist = $data['artist'];
        $record->genre_id = $data['genre_id'];
        $record->year = $data['year'];

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('covers', 'public');
            $record->cover_image = $path;
}


        $record->update();

        return redirect()->route('records.show', $record->id)->with('message', 'Record updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        $record->delete();

        return redirect()->route('records.index')->with('message', 'Record deleted successfully');
    }
}
