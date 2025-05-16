<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\Api\GenreController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('records', [RecordController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);

Route::get('records/{record}', [RecordController::class, 'show']);

Route::post('records', [RecordController::class, 'store']);

Route::put('/records/{id}', [RecordController::class, 'update']);

Route::delete('/records/{id}', [RecordController::class, 'destroy']);
