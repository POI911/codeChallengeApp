<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function create(){

        return view('login');

    }

    public function store(){

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);

        if(auth()->attempt($attributes) ){
            session()->regenerate(); // prevent hacking (web fixation)
            return redirect('/');
        }

        return back()->withErrors(['Error', "Email or Password is not correct"]);

    }
    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
}
