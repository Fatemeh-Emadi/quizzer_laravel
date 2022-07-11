<?php

namespace App\Http\Controllers;
use App\Models\Question;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FinalScore extends Controller
{
    function index()
    {
        $total=Question::count();
        $user_score=Session::get("user_score");
        return view("final",[
            "user_score"=>$user_score,
            "total"=>$total
        ]);
    }
}
