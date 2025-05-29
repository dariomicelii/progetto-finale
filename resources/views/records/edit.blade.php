@extends('layouts.records')

@section('cover_image', asset('storage/' . $record->cover_image))
@section('title', 'Modifica il disco')

@section('content')

<form action="{{ route('records.update', $record) }}" method="POST">

    @csrf
    @method('PUT')
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{ $record->title }}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="artist">Artista</label>
        <input type="text" name="artist" id="artist" value="{{ $record->artist }}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="genre_id">Genere</label>
        <select name="genre_id" id="category_id">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}" {{ $record->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="year">Anno</label>
        <input type="text" name="year" id="year" value="{{ $record->year }}">
    </div>

    <input type="submit" value="Salva">

</form>

@endsection