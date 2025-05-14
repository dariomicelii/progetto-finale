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
        <label for="genre_id">Genere</label>
        <select name="genre_id" id="category_id">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="year">Anno</label>
        <input type="text" name="year" id="year">
    </div>

    <input type="submit" value="Salva">

</form>

@endsection