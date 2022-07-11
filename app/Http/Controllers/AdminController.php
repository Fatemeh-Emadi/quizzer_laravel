<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Answer;
class AdminController extends Controller
{
    
   function index(){
       return view("admin");
   }
   function add(Request $request){
$question=new Question();
$question->text=$request["text"];

$question->save();
//in laravel
$qestion_id = Question::all()->last()->id;
//in php
//$question_id=$db->insert_id;//اخرین چیزی که تو دیتابیس درج شده
$true_answer = $request["A_true"];
//in php 
/*foreach($_POST["answer"] as $i =>$answer){
    if($i=1==$true_answer_index){
        $is_true=1;
    }
    else{
        $is_true=0;
    }
    */
//in laravel
foreach($request["answer"] as $i=>$answer){
    $answers=new Answer();
    if($i+1 == $true_answer)
            {
                $is_true = 1;
            }
            else
            {
                $is_true = 0;
            }
            
            $answers -> text=$answer;
            $answers -> is_true=$is_true;
            $answers -> question_id=$qestion_id;
            $answers->save();
        }
        return redirect("/");
}
   }

