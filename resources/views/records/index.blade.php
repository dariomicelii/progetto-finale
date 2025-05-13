@extends('layouts.records')

@section('title', 'I tuoi dischi')

@section('content')

<div class="d-flex py-4 gap-2">
    <a class="btn btn-outline-primary" href="{{ route('records.create')}}">Aggiungi un disco</a>

    
</div>

<table>
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Artista</th>
            <th>Genere</th>
            <th>Anno</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->title }}</td>
                <td>{{ $record->artist }}</td>
                <td>{{ $record->genre }}</td>
                <td>{{ $record->year }}</td>
                <td>
                   <a href="{{ route('records.show', $record) }}">Visualizza</a> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection