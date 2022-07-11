<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    function index($id)
    {
     
      $question= Question::find($id);
      $total=Question::count();
        return view("question",[
            "question"=>$question,
            "total"=>$total

        ]);
    }
    function check(Request $request)
    {   $total=Question::count();
        $question_id=$request["question_id"];
        $user_choice_id=$request["answer"];
        $correct_choice_id=Answer::where('question_id','=',$question_id)->where('is_true','=',1)->first()->id;
        if($user_choice_id==$correct_choice_id)
        {
            $user_score=Session::get("user_score");
            $user_score++;
            Session::put("user_score",$user_score);

        }
        $question_id++;
        if($question_id>$total){
            return redirect("/final");
        }
        else
        {
        return redirect("/question/$question_id");
        }
    }
}
