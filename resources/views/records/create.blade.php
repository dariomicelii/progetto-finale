@extends('layouts.records')

@section('title', 'Aggiungi un nuovo disco')

@section('content')

<form action="{{ route('records.store') }}" method="POST" enctype="multipart/form-data">

    {{-- Includiamo il token CSRF per la sicurezza --}}

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

    <div class="form-control mb-3 d-flex flex-column">
        <label for="cover_image">Copertina</label>
        <input type="file" name="cover_image" id="cover_cover">
    </div>
    <input type="submit" value="Salva" class="btn btn-primary">

</form>

@endsection