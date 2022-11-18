<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }


    public function store(){
        $attributes = request()->validate([
            'name' => ['required', 'min:3' ,' max:32', 'unique:users,name'],
            'email' => ['required','email','max:255', 'unique:users,email'],
            'password' => ['required', 'min:7', 'max:255']

        ]);

            $user = User::create($attributes);
            auth()->login($user);
            return view('index');
        }

    }

