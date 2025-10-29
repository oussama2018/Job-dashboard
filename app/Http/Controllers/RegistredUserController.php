<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegistredUserCOntroller extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(){
       $validateAttributes= request()->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required',Password::min(6),'confirmed']
        ]);
        $user=User::create($validateAttributes);
        Auth::login($user);
        return redirect('/');

    }
}
