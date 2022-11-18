<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\SolutionController;
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


Route::get('/', function () {
    return view('index');
});

Route::post('/register', function() {
    return view('register');
});

// view the add challenge page
Route::get('/addchallenges', function() {
    return view('addchallenges');
});


// view the add solution page
Route::get('/submitsolution', function() {

    return view('submitsolution');
});


Route::get('/solutions', [SolutionController::class, "index"]);
// a Form Get request to insert the solution to the database
Route::get('/add_solution_query', [SolutionController::class, "create"]);



Route::get('/challenges', [ChallengeController::class, "index"]);
// a Form Get request to insert the challenge to the database
Route::get('/add_challenge_query', [ChallengeController::class, 'create']);




