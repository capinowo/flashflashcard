@extends('layouts.app')

@section('content')
    <h3 style="color: white; text-align: center;">Pilih Topik</h3>

    <form action="/start" method="POST" style="width: 100%; margin-top: 1.5rem;">
        @csrf
        <div style="display: flex; flex-direction: column; gap: 10px;">
            @foreach (['fruit', 'color', 'house', 'school', 'weather', 'activity', 'vegetable', 'body'] as $topic)
                <button type="submit" name="topic" value="{{ $topic }}" 
                    style="padding: 0.75rem; background-color: white; border: none; border-radius: 10px; color: #F9A58C; font-weight: bold;">
                    {{ ucfirst($topic) }}
                </button>
            @endforeach
        </div>
    </form>
@endsection
