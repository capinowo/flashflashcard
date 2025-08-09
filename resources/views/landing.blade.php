@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        .game-title {
            font-family: 'Press Start 2P', cursive;
            font-size: 2.5rem; /* lebih besar dari sebelumnya */
            color: white;
            text-align: center;
            line-height: 1.5;
            margin-bottom: 2rem;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .btn-big {
            width: 250px; /* panjang sama */
            padding: 1rem;
            font-size: 0.9rem;
            font-family: 'Press Start 2P', cursive;
            text-align: center;
            border-radius: 12px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: white;
            color: #F9A58C;
            border: none;
        }

        .btn-outline {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>

    <h2 class="game-title">
        Flash<br>
        Flash<br>
        Card!
    </h2>

    <div class="btn-container">
        <form action="/topics" method="get">
            <button type="submit" class="btn-big btn-primary">Mulai</button>
        </form>

        <form action="/tutorial" method="get">
            <button type="submit" class="btn-big btn-outline">Lihat Tutorial</button>
        </form>
    </div>
@endsection
