<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;

Route::get('/', function () {return view('home');});

Route::get('/elf/toys', [ToyController::class, 'index'])->name('toyshome');
Route::delete('/elf/toys/{id}', [ToyController::class, 'destroy'])->name('toysdestroy');
Route::post('/elf/toys', [ToyController::class, 'store'])->name('toysstore');
Route::put('/elf/toys/{id}', [ToyController::class, 'update'])->name('toysupdate');
Route::get('/elf/toys/{id}',[ToyController::class, 'show'])->name('toysshow');

Route::get('/santa/kids', [KidController::class, 'index'])->name('kidshome');
Route::delete('/santa/kids/{id}', [KidController::class, 'destroy'])->name('kidsdestroy');
Route::post('/santa/kids', [KidController::class, 'store'])->name('kidsstore');
Route::put('/santa/kids/{id}', [KidController::class, 'update'])->name('kidsupdate');
Route::get('/santa/kids/{id}',[KidController::class, 'show'])->name('kidsshow');