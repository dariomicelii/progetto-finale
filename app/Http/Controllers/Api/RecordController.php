<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;



class RecordController extends Controller
{
    public function index()
{
    $records = Record::with('genre')->get();

    // Aggiungi il path completo a ogni record
    foreach ($records as $record) {
        $record->cover_image = $record->cover_image
            ? asset('storage/' . $record->cover_image)
            : null;
    }

    return response()->json([
        'data' => $records
    ]);
}

    
    public function show($id)
{
    $record = Record::with('genre')->findOrFail($id);

    // Aggiungi il path completo dell'immagine
    $record->cover_image = $record->cover_image
        ? asset('storage/' . $record->cover_image)
        : null;

    return response()->json([
        'data' => $record
    ]);
}


    public function store(Request $request) {
    $data = $request->validate([
        'title' => 'required|string',
        'artist' => 'required|string',
        'year' => 'required|integer',
        'genre_id' => 'required|exists:genres,id',
        
    ]);

    $record = Record::create($data);

    return response()->json(['success' => true, 'data' => $record], 201);
}


public function update(Request $request, $id)
{
    $data = $request->validate([
        'title' => 'required|string',
        'year' => 'required|numeric',
        'genre_id' => 'required|exists:genres,id',
    ]);

    $record = Record::findOrFail($id);
    $record->update($data);

    return response()->json([
        'success' => true,
        'message' => 'Disco aggiornato con successo',
        'data' => $record
    ]);
}


public function destroy($id)
{
    $record = Record::findOrFail($id);
    $record->delete();

    return response()->json([
        'success' => true,
        'message' => 'Disco eliminato con successo'
    ]);
}



}
