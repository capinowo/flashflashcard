@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

    body {
        background-color: #fddad3; /* warna latar luar */
    }

    .game-container {
        background-color: #f9a58c; /* warna kotak */
        border-radius: 20px;
        padding: 2rem 1.5rem;
        max-width: 350px;
        margin: auto;
        text-align: center;
    }

    .score-text {
        font-family: 'Press Start 2P', cursive;
        color: white;
        font-size: 0.8rem;
        margin-bottom: 1rem;
    }

    .flashcard-image {
        max-width: 180px;
        height: auto;
        margin-bottom: 2rem;
    }

    .choice-btn {
        background-color: #f47e74;
        border: none;
        border-radius: 12px;
        padding: 0.75rem;
        font-family: 'Press Start 2P', cursive;
        font-size: 0.7rem;
        color: black;
        width: 100%;
    }

    .choice-btn:hover {
        background-color: #e06b66;
    }

    .choice-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
    }
</style>

<div class="game-container">
    <p class="score-text">Score: {{ $score }}</p>

    <img src="{{ asset($question['image']) }}" class="flashcard-image" alt="Flashcard Image">

    <form method="POST" action="{{ route('game.answer') }}">
        @csrf
        <input type="hidden" name="topic" value="{{ $topic }}">

        <div class="choice-grid">
            @foreach ($question['choices'] as $choice)
                <button type="submit" name="answer" value="{{ $choice }}" class="choice-btn">
                    {{ $choice }}
                </button>
            @endforeach
        </div>
    </form>
</div>
@endsection
