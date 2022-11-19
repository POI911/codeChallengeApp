<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function index(){
        $challenges = DB::table('challenges')
    ->join('users', 'user_id', '=', 'users.id')
    ->get(['challenges.id', 'users.name', 'challenge_link', 'challenge_name']);
    return view('challenges', ['challenges' => $challenges ]);

    }


public function create(){
    return view('addchallenges');
}


public function store(){

    Challenge::create(['user_id' => auth()->user()->id,
    'challenge_link' => request("challengeLink"),
    'challenge_name' => request('challengeName')]);

    return view('addchallenges');
}

}


