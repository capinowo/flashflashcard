@extends('layouts.app')

@section('content')
    <h2 style="color: white; text-align: center;">Hasil Permainan</h2>

    <p style="text-align: center; color: white; font-size: 16px;">
        Skor kamu: <strong>{{ $score }}</strong>
    </p>

    <form action="/topics" method="get" style="margin-top: 2rem; width: 100%;">
        <button type="submit" style="width: 100%; padding: 0.75rem; background-color: white; border: none; border-radius: 10px; color: #F9A58C; font-weight: bold;">
            Main Lagi!
        </button>
    </form>
@endsection
