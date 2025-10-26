<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegistredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
     $validateAttributes=request()->validate([
        'first_name'=>['required'],
        'last_name'=>['required'],
        'email'=>['required','email','max:254','unique:users,email'],
        'password'=>['required',Password::min(6), 'confirmed'], // password_confirmation
     ]);
     $user=User::create($validateAttributes);
     Auth::login($user);
     return redirect('/jobs');
    }
}
