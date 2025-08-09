<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\GameController;

// Halaman umum
Route::get('/', [FlashcardController::class, 'landing'])->name('landing');
Route::get('/tutorial', [FlashcardController::class, 'tutorial'])->name('tutorial');
Route::get('/topics', [FlashcardController::class, 'topics'])->name('topics');
Route::get('/result', [FlashcardController::class, 'result'])->name('result');

// Permainan
Route::post('/start', [FlashcardController::class, 'start'])->name('flashcard.start');
Route::get('/game/{topic}', [GameController::class, 'show'])->name('game.show');
Route::post('/answer', [GameController::class, 'answer'])->name('game.answer');
