<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    protected $questions = [
        'activities' => [
            ['image' => 'images/activities/bathing.png', 'correct' => 'Bathing', 'choices' => ['Bathing', 'Dancing', 'Sleeping', 'Running']],
            ['image' => 'images/activities/dancing.png', 'correct' => 'Dancing', 'choices' => ['Reading', 'Dancing', 'Singing', 'Writing']],
            ['image' => 'images/activities/eating.png', 'correct' => 'Eating', 'choices' => ['Cooking', 'Eating', 'Running', 'Playing']],
            ['image' => 'images/activities/reading.png', 'correct' => 'Reading', 'choices' => ['Writing', 'Sleeping', 'Reading', 'Dancing']],
            ['image' => 'images/activities/running.png', 'correct' => 'Running', 'choices' => ['Singing', 'Running', 'Cooking', 'Bathing']],
            ['image' => 'images/activities/singing.png', 'correct' => 'Singing', 'choices' => ['Singing', 'Dancing', 'Sleeping', 'Eating']],
            ['image' => 'images/activities/sleeping.png', 'correct' => 'Sleeping', 'choices' => ['Running', 'Reading', 'Sleeping', 'Cooking']],
            ['image' => 'images/activities/writing.png', 'correct' => 'Writing', 'choices' => ['Writing', 'Bathing', 'Playing', 'Reading']],
            ['image' => 'images/activities/cooking.png', 'correct' => 'Cooking', 'choices' => ['Eating', 'Cooking', 'Singing', 'Running']],
            ['image' => 'images/activities/playing.png', 'correct' => 'Playing', 'choices' => ['Playing', 'Sleeping', 'Reading', 'Dancing']],
        ],

        'body' => [
            ['image' => 'images/body/ear.png', 'correct' => 'Ear', 'choices' => ['Ear', 'Eye', 'Nose', 'Hand']],
            ['image' => 'images/body/eye.png', 'correct' => 'Eye', 'choices' => ['Eye', 'Ear', 'Tongue', 'Hair']],
            ['image' => 'images/body/feet.png', 'correct' => 'Feet', 'choices' => ['Feet', 'Hand', 'Nose', 'Teeth']],
            ['image' => 'images/body/fingernail.png', 'correct' => 'Fingernail', 'choices' => ['Fingernail', 'Hair', 'Ear', 'Tongue']],
            ['image' => 'images/body/hand.png', 'correct' => 'Hand', 'choices' => ['Hand', 'Feet', 'Teeth', 'Eye']],
            ['image' => 'images/body/head.png', 'correct' => 'Head', 'choices' => ['Head', 'Hair', 'Nose', 'Ear']],
            ['image' => 'images/body/nose.png', 'correct' => 'Nose', 'choices' => ['Nose', 'Tongue', 'Ear', 'Teeth']],
            ['image' => 'images/body/teeth.png', 'correct' => 'Teeth', 'choices' => ['Teeth', 'Tongue', 'Hair', 'Feet']],
            ['image' => 'images/body/tongue.png', 'correct' => 'Tongue', 'choices' => ['Tongue', 'Teeth', 'Nose', 'Eye']],
            ['image' => 'images/body/hair.png', 'correct' => 'Hair', 'choices' => ['Hair', 'Head', 'Ear', 'Feet']],
        ],

        'color' => [
            ['image' => 'images/color/black.png', 'correct' => 'Black', 'choices' => ['Black', 'Blue', 'Red', 'White']],
            ['image' => 'images/color/blue.png', 'correct' => 'Blue', 'choices' => ['Blue', 'Green', 'Yellow', 'Black']],
            ['image' => 'images/color/gold.png', 'correct' => 'Gold', 'choices' => ['Gold', 'Silver', 'Yellow', 'Orange']],
            ['image' => 'images/color/green.png', 'correct' => 'Green', 'choices' => ['Green', 'Blue', 'Black', 'Purple']],
            ['image' => 'images/color/orange.png', 'correct' => 'Orange', 'choices' => ['Orange', 'Red', 'Yellow', 'Green']],
            ['image' => 'images/color/purple.png', 'correct' => 'Purple', 'choices' => ['Purple', 'Blue', 'Red', 'Pink']],
            ['image' => 'images/color/red.png', 'correct' => 'Red', 'choices' => ['Red', 'Pink', 'Orange', 'Yellow']],
            ['image' => 'images/color/silver.png', 'correct' => 'Silver', 'choices' => ['Silver', 'Gold', 'White', 'Gray']],
            ['image' => 'images/color/white.png', 'correct' => 'White', 'choices' => ['White', 'Black', 'Silver', 'Gray']],
            ['image' => 'images/color/yellow.png', 'correct' => 'Yellow', 'choices' => ['Yellow', 'Orange', 'Gold', 'Green']],
        ],

        'fruit' => [
            ['image' => 'images/fruit/coconut.png', 'correct' => 'Coconut', 'choices' => ['Coconut', 'Grape', 'Melon', 'Apple']],
            ['image' => 'images/fruit/grape.png', 'correct' => 'Grape', 'choices' => ['Apple', 'Grape', 'Orange', 'Banana']],
            ['image' => 'images/fruit/guava.png', 'correct' => 'Guava', 'choices' => ['Guava', 'Melon', 'Orange', 'Durian']],
            ['image' => 'images/fruit/mangosteen.png', 'correct' => 'Mangosteen', 'choices' => ['Rambutan', 'Mangosteen', 'Banana', 'Apple']],
            ['image' => 'images/fruit/melon.png', 'correct' => 'Melon', 'choices' => ['Melon', 'Watermelon', 'Apple', 'Orange']],
            ['image' => 'images/fruit/orange.png', 'correct' => 'Orange', 'choices' => ['Grape', 'Orange', 'Durian', 'Melon']],
            ['image' => 'images/fruit/rambutan.png', 'correct' => 'Rambutan', 'choices' => ['Rambutan', 'Mangosteen', 'Apple', 'Banana']],
            ['image' => 'images/fruit/watermelon.png', 'correct' => 'Watermelon', 'choices' => ['Melon', 'Banana', 'Watermelon', 'Coconut']],
            ['image' => 'images/fruit/banana.png', 'correct' => 'Banana', 'choices' => ['Apple', 'Banana', 'Coconut', 'Orange']],
            ['image' => 'images/fruit/apple.png', 'correct' => 'Apple', 'choices' => ['Apple', 'Orange', 'Banana', 'Grape']],
        ],

        'home' => [
            ['image' => 'images/home/bed.png', 'correct' => 'Bed', 'choices' => ['Bed', 'Chair', 'Sofa', 'Lamp']],
            ['image' => 'images/home/chair.png', 'correct' => 'Chair', 'choices' => ['Desk', 'Chair', 'Bed', 'Mirror']],
            ['image' => 'images/home/desk.png', 'correct' => 'Desk', 'choices' => ['Desk', 'Sofa', 'Chair', 'Bed']],
            ['image' => 'images/home/lamp.png', 'correct' => 'Lamp', 'choices' => ['Lamp', 'Mirror', 'Pillow', 'Chair']],
            ['image' => 'images/home/mirror.png', 'correct' => 'Mirror', 'choices' => ['Mirror', 'Window', 'Lamp', 'Desk']],
            ['image' => 'images/home/pillow.png', 'correct' => 'Pillow', 'choices' => ['Pillow', 'Bed', 'Chair', 'Sofa']],
            ['image' => 'images/home/refrigerator.png', 'correct' => 'Refrigerator', 'choices' => ['Refrigerator', 'TV', 'Window', 'Sofa']],
            ['image' => 'images/home/tv.png', 'correct' => 'TV', 'choices' => ['TV', 'Lamp', 'Bed', 'Mirror']],
            ['image' => 'images/home/window.png', 'correct' => 'Window', 'choices' => ['Window', 'Mirror', 'Desk', 'Chair']],
            ['image' => 'images/home/sofa.png', 'correct' => 'Sofa', 'choices' => ['Sofa', 'Chair', 'Bed', 'Pillow']],
        ],

        'school' => [
            ['image' => 'images/school/backpack.png', 'correct' => 'Backpack', 'choices' => ['Backpack', 'Book', 'Eraser', 'Pencil']],
            ['image' => 'images/school/book.png', 'correct' => 'Book', 'choices' => ['Marker', 'Book', 'Calendar', 'Scissor']],
            ['image' => 'images/school/eraser.png', 'correct' => 'Eraser', 'choices' => ['Pencil', 'Book', 'Eraser', 'Marker']],
            ['image' => 'images/school/marker.png', 'correct' => 'Marker', 'choices' => ['Marker', 'Pencil', 'Backpack', 'Eraser']],
            ['image' => 'images/school/pencil.png', 'correct' => 'Pencil', 'choices' => ['Pencil', 'Eraser', 'Marker', 'Book']],
            ['image' => 'images/school/wall_clock.png', 'correct' => 'Wall Clock', 'choices' => ['Wall Clock', 'Whiteboard', 'Calendar', 'Scissor']],
            ['image' => 'images/school/whiteboard.png', 'correct' => 'Whiteboard', 'choices' => ['Whiteboard', 'Wall Clock', 'Book', 'Marker']],
            ['image' => 'images/school/paper_clip.png', 'correct' => 'Paper Clip', 'choices' => ['Paper Clip', 'Book', 'Pencil', 'Marker']],
            ['image' => 'images/school/calendar.png', 'correct' => 'Calendar', 'choices' => ['Calendar', 'Whiteboard', 'Eraser', 'Scissor']],
            ['image' => 'images/school/scissor.png', 'correct' => 'Scissor', 'choices' => ['Scissor', 'Marker', 'Book', 'Backpack']],
        ],

        'vegetables' => [
            ['image' => 'images/vegetables/broccoli.png', 'correct' => 'Broccoli', 'choices' => ['Broccoli', 'Cabbage', 'Carrot', 'Onion']],
            ['image' => 'images/vegetables/cabbage.png', 'correct' => 'Cabbage', 'choices' => ['Cabbage', 'Broccoli', 'Onion', 'Mushroom']],
            ['image' => 'images/vegetables/carrot.png', 'correct' => 'Carrot', 'choices' => ['Carrot', 'Paprika', 'Tomato', 'Cucumber']],
            ['image' => 'images/vegetables/cucumber.png', 'correct' => 'Cucumber', 'choices' => ['Cucumber', 'Carrot', 'Cassava', 'Paprika']],
            ['image' => 'images/vegetables/eggplant.png', 'correct' => 'Eggplant', 'choices' => ['Eggplant', 'Tomato', 'Paprika', 'Carrot']],
            ['image' => 'images/vegetables/onion.png', 'correct' => 'Onion', 'choices' => ['Onion', 'Broccoli', 'Cabbage', 'Mushroom']],
            ['image' => 'images/vegetables/tomato.png', 'correct' => 'Tomato', 'choices' => ['Tomato', 'Cucumber', 'Carrot', 'Eggplant']],
            ['image' => 'images/vegetables/cassava.png', 'correct' => 'Cassava', 'choices' => ['Cassava', 'Paprika', 'Onion', 'Tomato']],
            ['image' => 'images/vegetables/mushroom.png', 'correct' => 'Mushroom', 'choices' => ['Mushroom', 'Cabbage', 'Broccoli', 'Eggplant']],
            ['image' => 'images/vegetables/paprika.png', 'correct' => 'Paprika', 'choices' => ['Paprika', 'Onion', 'Tomato', 'Carrot']],
        ],

        'weather' => [
            ['image' => 'images/weather/cloudy.png', 'correct' => 'Cloudy', 'choices' => ['Cloudy', 'Rainy', 'Sunny', 'Snowy']],
            ['image' => 'images/weather/overcast.png', 'correct' => 'Overcast', 'choices' => ['Overcast', 'Stormy', 'Sunny', 'Cloudy']],
            ['image' => 'images/weather/rainbow.png', 'correct' => 'Rainbow', 'choices' => ['Rainbow', 'Cloudy', 'Sunny', 'Snowy']],
            ['image' => 'images/weather/rainy.png', 'correct' => 'Rainy', 'choices' => ['Rainy', 'Snowy', 'Stormy', 'Sunny']],
            ['image' => 'images/weather/snowy.png', 'correct' => 'Snowy', 'choices' => ['Snowy', 'Cloudy', 'Rainy', 'Stormy']],
            ['image' => 'images/weather/stormy.png', 'correct' => 'Stormy', 'choices' => ['Stormy', 'Thunder', 'Cloudy', 'Overcast']],
            ['image' => 'images/weather/sunny.png', 'correct' => 'Sunny', 'choices' => ['Sunny', 'Cloudy', 'Rainy', 'Overcast']],
            ['image' => 'images/weather/thunder.png', 'correct' => 'Thunder', 'choices' => ['Thunder', 'Stormy', 'Rainy', 'Snowy']],
            ['image' => 'images/weather/windy.png', 'correct' => 'Windy', 'choices' => ['Windy', 'Sunny', 'Cloudy', 'Snowy']],
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

        // Acak pilihan jawaban
        $choices = $question['choices'];
        shuffle($choices);
        $question['choices'] = $choices;

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
        $streak = Session::get('streak', 0); // simpan streak
        $questions = $this->questions[$topic];

        if ($answer === $questions[$index]['correct']) {
            $streak++;
            // 10 poin dasar + 2 poin bonus tiap streak > 1
            $score += 10 + max(0, ($streak - 1) * 2);
        } else {
            $streak = 0; // reset streak
        }

        Session::put('score', $score);
        Session::put('streak', $streak);
        Session::put('question_index', $index + 1);

        return redirect()->route('game.show', ['topic' => $topic]);
    }

}
