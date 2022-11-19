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
Route::post('register', [RegisterController::class, "store"])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware(('guest'));
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');



Route::get('/solutions', [SolutionController::class, "index"]);
Route::get('/addsolution', [SolutionController::class, "create"]);
Route::post('/addsolution', [SolutionController::class, "store"])->middleware("auth");


Route::get('/challenges', [ChallengeController::class, "index"]);
Route::get('/addchallenges', [ChallengeController::class, 'create']);
Route::post('/addchallenges', [ChallengeController::class, 'store'])->middleware("auth");



