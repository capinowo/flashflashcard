<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashcardController;

Route::get('/', [FlashcardController::class, 'landing'])->name('landing');
Route::get('/topics', [FlashcardController::class, 'chooseTopic'])->name('topics');
Route::post('/start', [FlashcardController::class, 'start'])->name('flashcard.start');
Route::get('/play', [FlashcardController::class, 'play'])->name('flashcard.play');
Route::post('/answer', [FlashcardController::class, 'answer'])->name('flashcard.answer');
Route::get('/result', [FlashcardController::class, 'result'])->name('flashcard.result');
Route::get('/tutorial', function () {
    return view('tutorial');
});

