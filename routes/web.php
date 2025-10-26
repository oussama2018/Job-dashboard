<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegistredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
Route::view('/','home');
Route::resource('jobs',JobController::class);
Route::view('/contact','contact');


Route::get('/register',[RegistredUserController::class,'create']);
Route::post('/register',[RegistredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);

