<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ToyController;
use App\Http\Controllers\Api\KidController;

Route::get('/elf/toys', [ToyController::class, 'index'])->name('apitoyshome');
Route::delete('/elf/toys/{id}', [ToyController::class, 'destroy'])->name('apitoysdestroy');
Route::post('/elf/toys', [ToyController::class, 'store'])->name('apitoysstore');
Route::put('/elf/toys/{id}', [ToyController::class, 'update'])->name('apitoysupdate');
Route::get('/elf/toys/{id}',[ToyController::class, 'show'])->name('apitoysshow');

Route::get('/santa/kids', [KidController::class, 'index'])->name('apikidshome');
Route::delete('/santa/kids/{id}', [KidController::class, 'destroy'])->name('apikidsdestroy');
Route::post('/santa/kids', [KidController::class, 'store'])->name('apikidsstore');
Route::put('/santa/kids/{id}', [KidController::class, 'update'])->name('apikidsupdate');
Route::get('/santa/kids/{id}',[KidController::class, 'show'])->name('apikidsshow');