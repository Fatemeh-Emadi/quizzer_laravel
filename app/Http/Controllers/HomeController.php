<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Question;
class HomeController extends Controller
{
    function index()
    {
        Session::put("user_score",0);
        $total=Question::count();
        return view("index",
    [
        "total"=>$total
    ]);
    }
}
