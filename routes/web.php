<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegistredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
Route::view('/','home');
Route::view('/contact','contact');

Route::prefix('jobs')->group(function () {
    Route::get('/', [JobController::class, 'index']);
    Route::get('/create', [JobController::class, 'create']);
    Route::post('/', [JobController::class, 'store'])->middleware('auth');
    Route::get('/{job}', [JobController::class, 'show']);
    Route::get('/{job}/edit', [JobController::class, 'edit'])->middleware('auth');
    Route::patch('/{job}', [JobController::class, 'update'])->middleware('auth');
    Route::delete('/{job}', [JobController::class, 'destroy'])->middleware('auth');
});

Route::get('/register',[RegistredUserController::class,'create']);
Route::post('/register',[RegistredUserController::class,'store']);
Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);


