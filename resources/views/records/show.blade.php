@extends('layouts.records')

@section('title', $record->title)

@section('content')


<h3>
    -{{ $record->artist}}
</h3>

<small>
    {{ $record->genre }}
</small>
<br>
<small>
    {{ $record->year }}
</small>

<div class="d-flex py-4 gap-2">
    <a class="btn btn-outline-warning" href="{{ route('records.edit', $record) }}">Modifica</a>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
    </button>
    
</div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il disco</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il disco {{ $record->title }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{ route('records.destroy', $record) }}" method="POST">
            @csrf
            @method('DELETE')
        <input type="submit" class="btn btn-outline-danger" value="Elimina definitivamente">
    </form>
      </div>
    </div>
  </div>
</div>

@endsection