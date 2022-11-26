<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Solution;
class SolutionController extends Controller
{
    public function index(){

        $solutions = DB::table('solutions')
        ->join('users', 'user_id', '=', 'users.id')
        ->get();
        return view('solutions', [ 'solutions' => $solutions]);

    }
    public function create(){
        return view('addsolution');
    }

    public function store(){
        $week_number = Challenge::where('challenge_name', request("challengeName"))
        ->first()
        ->challenge_week_number;

        Solution::create([
            'user_id' => auth()->user()->id,
            'solution_week_number' => $week_number,
            'challenge_name' => request("challengeName"),
            'solution_link' => request('solutionLink')
        ]);


    return view('addsolution');
    }
}
