@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="logo_myrecords">
            <svg width="500" height="150" viewBox="0 0 320 90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="MyRecords logo">
                <style>
                    .title {
                    font-family: 'Georgia', serif;
                    font-size: 38px;
                    fill: #3e2c1c;
                    }
                    .subtitle {
                    font-family: 'Courier New', monospace;
                    font-size: 13px;
                    fill: #b28d5b;
                    }
                    .vinyl {
                    fill: #222;
                    }
                    .label {
                    fill: #e2b05b;
                    }
                </style>
                <circle class="vinyl" cx="45" cy="45" r="30"/>
                <circle class="label" cx="45" cy="45" r="5"/>
                <text class="title" x="90" y="50">MyRecords</text>
                <text class="subtitle" x="90" y="70">Vintage Vinyl Collection</text>
                </svg>

        </div>
        <h1 class="display-5 fw-bold">
            Benvenuto su MyRecords 🎵
        </h1>

        <p class="col-md-8 fs-4">
            L'app che ti permette di gestire la tua collezione di dischi in modo semplice e veloce.
            Puoi aggiungere, modificare e cancellare i tuoi dischi.
        </p>
        <a href="https://packagist.org/packages/pacificdev/laravel_9_preset" class="btn btn-primary btn-lg" type="button">Documentation</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Progetto realizzato in vista dell'esame finale della specializzazione in PHP e Laravel presso il corso per Full Stack Developer di Boolean.</p>
    </div>
</div>
@endsection