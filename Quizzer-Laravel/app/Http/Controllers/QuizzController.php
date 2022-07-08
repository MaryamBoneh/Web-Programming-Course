<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\supports\session;

class QuizzController extends Controller
{
    function index($id)
    {
        $question = Question::find($id);
        return view('question',
            ['question' => $question]
        );
    }

    function check(Request $request)
    {
        $question_id = $request['question_id'];
        $user_choice_id = $request['answer'];
        $correct_choice_id = Answer::where('user_choice_id', '=', $question_id)->where('is_true', '=', 1)->first()->id;

        if ($user_choice_id == $correct_choice_id){
            $user_score = Session::get('user_score');
            $user_score++;
            Session::put('user_score', $user_score);
            echo 'Correct answer';
        }else {
            echo 'Invalid answer';
        }
    }
   
}
