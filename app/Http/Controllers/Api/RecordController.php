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


$data = $records->map(function ($record) {
    return [
        'id' => $record->id,
        'title' => $record->title,
        'artist' => $record->artist,
        'year' => $record->year,
        'genre' => $record->genre ? [
            'id' => $record->genre->id,
            'name' => $record->genre->name,
        ] : null,
        'cover_image' => $record->cover_image ? asset('storage/' . $record->cover_image) : null,
    ];
});

return response()->json(['data' => $data]);


}


public function show($id)


{
$record = Record::with('genre')->findOrFail($id);


return response()->json([
    'data' => [
        'id' => $record->id,
        'title' => $record->title,
        'artist' => $record->artist,
        'year' => $record->year,
        'genre' => $record->genre ? [
            'id' => $record->genre->id,
            'name' => $record->genre->name,
        ] : null,
        'cover_image' => $record->cover_image ? asset('storage/' . $record->cover_image) : null,
    ]
]);


}

public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string',
        'artist' => 'required|string',
        'year' => 'required|integer',
        'genre_id' => 'required|exists:genres,id',
        'cover_image' => 'nullable|file', // ✅ valida immagine
    ]);

    // ✅ salva immagine se esiste
    if ($request->hasFile('cover_image')) {
        $path = $request->file('cover_image')->store('covers', 'public');
        $data['cover_image'] = $path;
    }

    $record = Record::create($data);

    return response()->json(['success' => true, 'data' => $record], 201);
}


public function update(Request $request, $id)
{
$data = $request->validate([
'title' => 'required|string',
'artist' => 'required|string',
'year' => 'required|numeric',
'genre_id' => 'required|integer|exists:genres,id',
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




















