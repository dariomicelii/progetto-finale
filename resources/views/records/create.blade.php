@extends('layouts.records')

@section('title', 'Aggiungi un nuovo disco')

@section('content')

<form action="{{ route('records.store') }}" method="POST">

    @csrf
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="artist">Artista</label>
        <input type="text" name="artist" id="artist">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="genre">Genere</label>
        <input type="text" name="genre" id="genre">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="year">Anno</label>
        <input type="text" name="year" id="year">
    </div>

    <input type="submit" value="Salva">

</form>

@endsection