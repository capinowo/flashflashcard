<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashcardController extends Controller
{
    // Halaman landing (home)
    public function landing()
    {
        return view('landing');
    }

    // Halaman tutorial
    public function tutorial()
    {
        return view('tutorial');
    }

    // Halaman pemilihan topik
    public function topics()
    {
        return view('topics');
    }

    public function start(Request $request)
    {
        $topic = $request->input('topic');

        // Reset sesi game
        session()->forget('score');
        session()->forget('question_index');

        // Redirect ke halaman game dengan topik yang dipilih
        return redirect()->route('game.show', ['topic' => $topic]);
    }
    
    public function result()
    {
        $score = session('score', 0);
        return view('result', compact('score'));
    }


}

