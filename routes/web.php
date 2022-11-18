<?php

use App\Models\Challenge;
use App\Models\Solution;
use Illuminate\Support\Facades\Route;
use Psy\CodeCleaner\CalledClassPass;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// this is what happens when you don't use controllers
Route::get('/', function () {
    return view('index');
});

// view the add challenge page
Route::get('/addchallenges', function() {
    return view('addchallenges');
});



// a Form Get request to insert the challenge to the database
Route::get('/add_challenge_query', function() {


    Challenge::create(['user_id' => request("userID"),
    'challenge_link' => request("challengeLink"),
    'challenge_name' => request('challengeName')

]);
    return view('addchallenges');
});

// view the add solution page
Route::get('/submitsolution', function() {

    return view('submitsolution');
});

// a Form Get request to insert the solution to the database
Route::get('/add_solution_query', function(){


        Solution::create([
            'user_id' => request("userID"),
            'challenge_name' => request("challengeName"),
            'solution_link' => request('solutionLink')
        ]);


    return view('submitsolution');
});



// View all added challenges
Route::get('/challenges', function() {
    $challenges = DB::table('challenges')
    ->join('users', 'user_id', '=', 'users.id')
    ->get(['challenges.id', 'users.name', 'challenge_link', 'challenge_name']);
    return view('challenges', ['challenges' => $challenges ]);
});

// View all submitted solutions
Route::get('/solutions', function(){
    $solutions = DB::table('solutions')
    ->join('users', 'user_id', '=', 'users.id')
    ->get();
    return view('solutions', [ 'solutions' => $solutions]);
});



