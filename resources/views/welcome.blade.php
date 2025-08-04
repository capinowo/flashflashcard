@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center min-vh-100 bg-danger bg-opacity-25">
    <div class="bg-danger bg-opacity-50 rounded-4 p-4 text-center" style="width: 320px;">

        {{-- Gambar --}}
        <div class="mb-4">
            <img src="{{ asset($card['image']) }}" alt="Flashcard Image" class="img-fluid rounded shadow" style="max-height: 200px;">
        </div>

        {{-- Pilihan Jawaban --}}
        <form method="POST" action="/answer">
            @csrf
            <div class="row g-3">
                @foreach ($card['choices'] as $choice)
                    <div class="col-6">
                        <button type="submit" name="answer" value="{{ $choice }}" class="btn btn-light w-100 shadow-sm">
                            {{ $choice }}
                        </button>
                    </div>
                @endforeach
            </div>
        </form>

        {{-- Optional: Score --}}
        <p class="mt-3 small text-dark">Score: {{ $score }}</p>

    </div>
</div>
@endsection
