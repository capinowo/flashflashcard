@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

    body {
        background-color: #fddad3;
        font-family: 'Press Start 2P', cursive;
    }

    .result-container {
        background-color: #f9a58c;
        border-radius: 20px;
        padding: 2rem 1.5rem;
        max-width: 350px;
        margin: 2rem auto;
        text-align: center;
    }

    .result-title {
        color: white;
        font-size: 1rem;
        margin-bottom: 1.5rem;
    }

    .score-label {
        color: white;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .score-value {
        color: white;
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 2rem;
    }

    .btn-custom {
        display: block;
        width: 100%;
        padding: 0.75rem;
        background-color: white;
        border: none;
        border-radius: 10px;
        color: #f9a58c;
        font-weight: bold;
        font-family: 'Press Start 2P', cursive;
        font-size: 0.7rem;
        margin-bottom: 0.75rem;
    }

    .btn-custom:hover {
        background-color: #ffe9e3;
    }
</style>

<div class="result-container">
    <h2 class="result-title">Hasil Permainan</h2>

    <p class="score-label">Skor Anda:</p>
    <p class="score-value">{{ $score }}</p>

    <form action="/topics" method="get">
        <button type="submit" class="btn-custom">Main Lagi!</button>
    </form>

    <form action="/" method="get">
        <button type="submit" class="btn-custom">Kembali ke Halaman Awal</button>
    </form>
</div>
@endsection
