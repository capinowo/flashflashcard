<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    protected $questions = [
        'fruit' => [
            [
                'image' => 'images/color/fruit/guava.png',
                'correct' => 'Guava',
                'choices' => ['Guava', 'Melon', 'Orange', 'Durian']
            ],
            [
                'image' => 'images/color/fruit/orange.png',
                'correct' => 'Orange',
                'choices' => ['Grape', 'Orange', 'Durian', 'Melon']
            ],
            // tambahkan soal lainnya
        ],
    ];

    public function show($topic)
    {
        $questions = $this->questions[$topic];
        $index = Session::get('question_index', 0);
        $score = Session::get('score', 0);

        // Selesai semua soal → ke result
        if ($index >= count($questions)) {
            return redirect()->route('result');
        }

        $question = $questions[$index];

        return view('game', [
            'question' => $question,
            'topic' => $topic,
            'score' => $score
        ]);
    }

    public function answer(Request $request)
    {
        $topic = $request->input('topic');
        $answer = $request->input('answer');

        $index = Session::get('question_index', 0);
        $score = Session::get('score', 0);
        $questions = $this->questions[$topic];

        if ($answer === $questions[$index]['correct']) {
            $score++;
        }

        Session::put('score', $score);
        Session::put('question_index', $index + 1);

        return redirect()->route('game.show', ['topic' => $topic]);
    }
}
