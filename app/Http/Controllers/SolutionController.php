<?php

namespace App\Http\Controllers;
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

        Solution::create([
            'user_id' => auth()->user()->id,
            'challenge_name' => request("challengeName"),
            'solution_link' => request('solutionLink')
        ]);


    return view('addsolution');
    }
}
