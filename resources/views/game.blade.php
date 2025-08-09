@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

    body {
        background-color: #fddad3;
    }

    .game-container {
        background-color: #f9a58c;
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

    /* Flip Card */
    .choice-card {
        perspective: 1000px;
        cursor: pointer;
    }

    .card-inner {
        position: relative;
        width: 100%;
        height: 60px; /* Sesuai tinggi tombol */
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .choice-card.flipped .card-inner {
        transform: rotateY(180deg);
    }

    .card-front, .card-back {
        position: absolute;
        width: 100%;      /* Sama seperti contoh kedua */
        height: 100%;     /* Tingginya penuh sesuai container */
        backface-visibility: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        padding: 0.75rem;
        font-family: 'Press Start 2P', cursive;
        font-size: 0.7rem;
        background-color: #f47e74;
        color: black;
        border: none;
        box-sizing: border-box; /* Biar padding gak nambah ukuran total */
    }


    .card-back {
        background-color: #fff;
        transform: rotateY(180deg);
    }

    /* Warna saat benar/salah */
    .correct {
        background-color: #4CAF50 !important; /* hijau */
        color: white;
    }

    .wrong {
        background-color: #f44336 !important; /* merah */
        color: white;
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

    <form id="gameForm" method="POST" action="{{ route('game.answer') }}">
        @csrf
        <input type="hidden" name="topic" value="{{ $topic }}">
        <input type="hidden" name="answer" id="answerInput">

        <div class="choice-grid">
            @foreach ($question['choices'] as $choice)
                <div class="choice-card" data-choice="{{ $choice }}" data-correct="{{ $question['correct'] }}">
                    <div class="card-inner">
                        <div class="card-front">{{ $choice }}</div>
                        <div class="card-back">
                            {{ $translations[$choice] ?? 'Tidak ada arti' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>

<script>
    document.querySelectorAll('.choice-card').forEach(card => {
        card.addEventListener('click', function() {
            let selected = this.dataset.choice;
            let correct = this.dataset.correct;

            // Tandai benar / salah
            if (selected === correct) {
                this.querySelector('.card-front').classList.add('correct');
            } else {
                this.querySelector('.card-front').classList.add('wrong');
            }

            // Tunggu 1 detik → flip semua kartu
            setTimeout(() => {
                document.querySelectorAll('.choice-card').forEach(c => {
                    c.classList.add('flipped');
                });

                // Tunggu lagi 1 detik → submit form
                setTimeout(() => {
                    document.getElementById('answerInput').value = selected;
                    document.getElementById('gameForm').submit();
                }, 1000);
            }, 1000);
        });
    });
</script>
@endsection
