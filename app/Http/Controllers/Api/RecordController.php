<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;



class RecordController extends Controller
{
    public function index() {

        //prendo tutti i dischi dal database
        $records = Record::with('genre')->get();

        // dd($records);

        return response()->json(
            [
                'success' => true,
                'data' => $records
            ]
        );
    }
    
    public function show(Record $record) {
        $record->load('genre');

        // dd($record->genre);

        return response()->json(
            [
                'success' => true,
                'data' => $record
            ]
        );
    }
}
