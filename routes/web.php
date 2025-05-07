<?php

use App\Http\Controllers\SlotController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SlotController::class, 'index'])->name('home');
Route::get('/{slug}', [SlotController::class, 'show'])->name('page');
Route::post('/slots', [SlotController::class, 'store'])->name('slots.store');
Route::delete('/slots/{id}', [SlotController::class, 'destroy'])->name('slots.destroy');
