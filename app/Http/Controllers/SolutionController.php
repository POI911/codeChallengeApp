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

        Solution::create([
            'user_id' => request("userID"),
            'challenge_name' => request("challengeName"),
            'solution_link' => request('solutionLink')
        ]);


    return view('submitsolution');
    }
}
