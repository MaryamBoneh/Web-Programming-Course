<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Session;

class QuizzController extends Controller
{
    function index($id)
    {
        $question = Question::find($id);

        return view('question',
            ['question' => $question]
        );
    }

    function add_view()
    {
        return view('add');
    }

    function check(Request $request)
    {
        $question_id = $request['question_id'];
        $user_choice_id = $request['answer'];
        $correct_choice_id = Answer::where('question_id', '=', $question_id)->where('is_true', '=', 1)->first()->id;

        if ($user_choice_id == $correct_choice_id){
            $user_score = Session::get('user_score');
            $user_score++;
            Session::put('user_score', $user_score);
        }
        $question_id++;
        echo $question_id;

        return redirect("/question/$question_id");
    }

    function add(Request $request)
    {
        $qestion = new Question();
        $qestion->NAME = $request["text"];
        $qestion->save();
        $id = Question::all()->last()->id;

        $true_answer = $request["true"];

        foreach ($request["answer"] as $i=>$answer)
        {
            $answers = new Answer();

            if($i+1 == $true_answer){
                $is_true = 1;
            }
            else{
                $is_true = 0;
            }
            
            $answers->TEXT = $answer;
            $answers->is_true = $is_true;
            $answers->question_id = $id;
            $answers->save();
        }
        return redirect("/add-question");
    }
}
