<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MotelController::class, 'index'])->name('home');
Route::resource('motel', MotelController::class);

Route::get('/motel/create', [MotelController::class, 'create'])->name('motel.create');