<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    $job=Job::with('employer')->latest()->cursorPaginate(5);
    return view('jobs.index',['jobs'=>$job]);
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show',['jobs'=>Job::findorFail($id)]);
});
Route::Post('/jobs',function(){
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required']
    ]);
Job::create([
    'title'=>request('title'),
    'salary'=>request('salary'),
    'employer_id'=>1
]);
return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});

