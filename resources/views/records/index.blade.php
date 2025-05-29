@extends('layouts.records')

@section('title', 'I tuoi dischi')

@section('content')

<div class="d-flex py-4 gap-2">
    <a class="btn btn-outline-primary" href="{{ route('records.create')}}">Aggiungi un disco</a>  
</div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        @foreach ($records as $record)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="ratio ratio-1x1 overflow-hidden">
                    <img src="{{ asset('storage/' . $record->cover_image) }}" alt="Copertina" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$record->title}}</h5>
                    <p class="card-text">{{$record->artist}}</p>
                    <p class="card-text">{{$record->genre->name}}</p>
                    <p class="card-text">{{$record->year}}</p>
                    <a href="{{ route('records.show', $record) }}" class="btn btn-primary">Dettaglio disco</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


@endsection