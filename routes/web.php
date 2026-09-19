<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
})->name('services');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/board/{slug}', [App\Http\Controllers\BoardController::class, 'show'])->name('board.show'); 