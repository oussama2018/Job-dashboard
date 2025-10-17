<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    $jobs=Job::with('employer')->cursorPaginate(5);
    return view('jobs',['jobs'=>$jobs]);
});
Route::get('/jobs/{id}', function ($id) {
    return view('job',['jobs'=>Job::find($id)]);
});
Route::get('/contact', function () {
    return view('contact');
});

