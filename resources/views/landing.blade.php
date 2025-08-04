@extends('layouts.app')

@section('content')
    <h2 style="color: white; text-align: center;">Selamat datang!</h2>
    <p style="text-align: center; color: white; font-size: 14px;">
        Ini adalah permainan flashcard seru untuk belajar sambil bermain!
    </p>

    <form action="/topics" method="get" style="margin-top: 2rem; width: 100%;">
        <button type="submit" style="width: 100%; padding: 0.75rem; background-color: white; border: none; border-radius: 10px; color: #F9A58C; font-weight: bold;">
            Mulai
        </button>
    </form>

    {{-- Tombol ke Tutorial --}}
    <form action="/tutorial" method="get" style="margin-top: 1rem; width: 100%;">
        <button type="submit" style="width: 100%; padding: 0.75rem; background-color: transparent; border: 2px solid white; border-radius: 10px; color: white; font-weight: bold;">
            Lihat Tutorial
        </button>
    </form>
@endsection
