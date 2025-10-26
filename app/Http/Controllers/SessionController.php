<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        $validateAttributes=request()->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        Auth::attempt($validateAttributes);
        if(!Auth::attempt($validateAttributes)){
            throw ValidationException::withMessages([
                'email'=>'Sorry the credentials do not match',
            ]);
        }
        request()->session()->regenerate();
        return redirect('/jobs');
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
