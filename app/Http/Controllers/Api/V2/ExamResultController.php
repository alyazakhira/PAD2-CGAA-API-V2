<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Essay;
use App\Models\CaseStudy;
use App\Models\MultipleChoice;
use App\Models\ExamSession;
use App\Models\SessionAnswer;
use App\Models\SessionQuestion;

class ExamResultController extends Controller
{
    public function get_mp_key($session_id){
        $answerPack = SessionAnswer::find($session_id);
        $questPack = SessionQuestion::find($session_id);

        // Get user's answer
        $userAnswer = array();
        for ($i=1; $i <= 60; $i++) { 
            $userAnswer["answer_$i"] = $answerPack->{"mp_answer_$i"};
        }

        // Get key answer
        $correctAnswer = array();
        for ($i=1; $i <= 60; $i++) { 
            $correctAnswer["c_answer_$i"] = MultipleChoice::find($questPack->{"mp_id_$i"})->correct_answer;
        }

        $detail = [
            'answer' => $userAnswer,
            'correct_answer' => $correctAnswer
        ];
        return ResourceWrapper::make(true, 200, 'Multiple Choice Result', $detail);
    }

    public function get_user_average($user_id){
        $userScores = ExamSession::where('user_id','=',$user_id)->get('score');

        if ($userScores->count() > 0) {
            $total = 0;
            foreach ($userScores as $item) {
                $score = $item->score;
                $total = $total + $score;
            }
            $average = $total / $userScores->count();
        } else {
            $average = 0;
        }

        $response = [
            'user_id' => $user_id,
            'average' => $average,
        ];
        return ResourceWrapper::make(true, 200, 'User Average Score', $response);
    }

    public function get_user_session($user_id){
        $session = ExamSession::where('user_id','=',$user_id)->get();
        return ResourceWrapper::make(true, 200, 'User Session', $session);
    }
}
