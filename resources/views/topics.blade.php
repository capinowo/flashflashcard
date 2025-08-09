@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

    .game-title {
        font-family: 'Press Start 2P', cursive;
        color: white;
        text-align: center;
        font-size: 1rem;
    }

    .topic-btn {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem;
        background-color: white;
        border: none;
        border-radius: 10px;
        color: #F9A58C;
        font-weight: bold;
        font-family: 'Press Start 2P', cursive;
        text-transform: uppercase;
    }

    .topic-btn img {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 1.2rem;
        color: white;
        text-decoration: none;
        background: rgba(255,255,255,0.2);
        padding: 5px 10px;
        border-radius: 50%;
    }

    .close-btn:hover {
        background: rgba(255,255,255,0.4);
    }
</style>

<a href="/" class="close-btn">✖</a>

<h3 class="game-title">Pilih Topik</h3>

<form action="/start" method="POST" style="width: 100%; margin-top: 1.5rem;">
    @csrf
    <div style="display: flex; flex-direction: column; gap: 10px;">
        @php
            $topicImages = [
                'fruit' => 'apple.png',
                'color' => 'red.png',
                'home' => 'bed.png',
                'school' => 'book.png',
                'weather' => 'sunny.png',
                'activities' => 'reading.png',
                'vegetables' => 'carrot.png',
                'body' => 'eye.png'
            ];
        @endphp

        @foreach (['fruit', 'color', 'home', 'school', 'weather', 'activities', 'vegetables', 'body'] as $topic)
            <button type="submit" name="topic" value="{{ $topic }}" class="topic-btn">
                <img src="{{ asset('images/'.$topic.'/'.$topicImages[$topic]) }}" alt="{{ $topic }}">
                {{ ucfirst($topic) }}
            </button>
        @endforeach
    </div>
</form>
@endsection
