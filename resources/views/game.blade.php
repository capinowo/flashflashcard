@extends('layouts.app')

@section('content')
    <div class="text-center">
        <p style="color: white; font-weight: bold;">Score: {{ $score }}</p>

        <img src="{{ asset($question['image']) }}" class="img-fluid mb-3" style="max-height: 200px;" alt="Flashcard Image">

        <form method="POST" action="{{ route('game.answer') }}">
            @csrf
            <input type="hidden" name="topic" value="{{ $topic }}">

            <div class="row g-2">
                @foreach ($question['choices'] as $choice)
                    <div class="col-6">
                        <button type="submit" name="answer" value="{{ $choice }}" class="btn btn-light w-100">
                            {{ $choice }}
                        </button>
                    </div>
                @endforeach
            </div>
        </form>
    </div>
@endsection
