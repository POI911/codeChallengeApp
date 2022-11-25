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
        # this return a collection of objects containing the week id
        $week = DB::table('challenges')
        ->where('challenge_name', '=', request('challengeName') )
        ->get('challenge_week_number');
        # get the week number from the collection of objects
        $week_number = $week->get(0)->challenge_week_number;


        Solution::create([
            'user_id' => auth()->user()->id,
            'solution_week_number' => $week_number,
            'challenge_name' => request("challengeName"),
            'solution_link' => request('solutionLink')
        ]);


    return view('addsolution');
    }
}
