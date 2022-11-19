<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('register', [RegisterController::class, "create"])->middleware('guest');
Route::post('register', [RegisterController::class, "store"]);

Route::get('login', [SessionController::class, 'create'])->middleware(('guest'));
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');



// view the add challenge page
Route::get('/addchallenges', function() {
    return view('addchallenges');
});


// view the add solution page
Route::get('/addsolution', function() {

    return view('addsolution');
});


Route::get('/solutions', [SolutionController::class, "index"]);
// a Form Get request to insert the solution to the database
Route::post('/addsolution', [SolutionController::class, "create"])->middleware("auth");



Route::get('/challenges', [ChallengeController::class, "index"]);
// a Form Get request to insert the challenge to the database
Route::post('/addchallenges', [ChallengeController::class, 'create'])->middleware("auth");




