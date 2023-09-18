<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Question;
use App\Models\MultipleChoice;
use App\Models\ExamSession;
use App\Models\SessionAnswer;
use App\Models\SessionQuestion;

class ExamController extends Controller
{
    public function begin_exam_pusat($user_id){
        $multipleChoices = MultipleChoice::where('question_type', 'pusat')->inRandomOrder()->limit(60)->get();
        $multipleChoicesID = array();
        foreach ($multipleChoices as $mp) {
            array_push($multipleChoicesID, $mp->id);
        }
        $multipleChoicesSorted = MultipleChoice::whereIn('id',$multipleChoicesID)->get();

        $examSession = new ExamSession;
        $examSession->user_id = $user_id;
        $examSession->type = 'pusat';
        $examSession->save();

        $mpPack = new SessionQuestion;
        $mpPack->id = $examSession->id;
        for ($i=0; $i <= 59; $i++) {
            $j = $i + 1;
            $mpPack->{"quest_id_$j"} = $multipleChoicesSorted[$i]->id;
        }
        $mpPack->save();

        $answerPack = new SessionAnswer;
        $answerPack->id = $examSession->id;
        $answerPack->save();

        $data = [
            'session_id' => $examSession->id,
        ];

        return ResourceWrapper::make(true, 200, 'Successfully Create Exam Session - Pusat', $data);
    }

    public function begin_exam_daerah($user_id){
        $multipleChoices = MultipleChoice::where('question_type', 'daerah')->inRandomOrder()->limit(60)->get();
        $multipleChoicesID = array();
        foreach ($multipleChoices as $mp) {
            array_push($multipleChoicesID, $mp->id);
        }
        $multipleChoicesSorted = MultipleChoice::whereIn('id',$multipleChoicesID)->get();

        $examSession = new ExamSession;
        $examSession->user_id = $user_id;
        $examSession->type = 'daerah';
        $examSession->save();

        $mpPack = new SessionQuestion;
        $mpPack->id = $examSession->id;
        for ($i=0; $i <= 59; $i++) {
            $j = $i + 1;
            $mpPack->{"quest_id_$j"} = $multipleChoicesSorted[$i]->id;
        }
        $mpPack->save();

        $answerPack = new SessionAnswer;
        $answerPack->id = $examSession->id;
        $answerPack->save();

        $data = [
            'session_id' => $examSession->id,
        ];

        return ResourceWrapper::make(true, 200, 'Successfully Create Exam Session - Daerah', $data);
    }

    public function get_exam_question($session_id){
        $mpPack = SessionQuestion::find($session_id);
        $mpPackID = array();
        for ($i=1; $i <= 60 ; $i++) { 
            array_push($mpPackID, $mpPack->{"quest_id_$i"});
        }
        $multipleChoices = MultipleChoice::whereIn('id',$mpPackID);

        $multipleChoicePaginated = $multipleChoices->paginate(1);

        return ResourceWrapper::make(true, 200, 'Exam Questions', $multipleChoicePaginated);
    }
   
    public function save_answer(Request $request, $session_id){
        $answerPack = SessionAnswer::find($session_id);
        for ($i=1; $i <= 60; $i++) { 
            if ($request->{"answer_$i"} != null) {
                $answerPack->{"answer_$i"} = $request->{"answer_$i"};
            }
        }
        $answerPack->save();

        // return response
        return ResourceWrapper::make(true, 200, 'Answer Saved Sucessfully', $answerPack);
    }

    public function calculate_score(Request $request, $session_id){
        // same as save answer at first
        $answerPack = SessionAnswer::find($session_id);
        for ($i=1; $i <= 60; $i++) { 
            if ($request->{"answer_$i"} != null) {
                $answerPack->{"answer_$i"} = $request->{"answer_$i"};
            }
        }
        $answerPack->save();

        // looping
        $quest_pack = SessionQuestion::find($request->session_id);
        $correct = 0;
        $wrong = 0;
        $notAnswered = 0;
        $examSession = ExamSession::find($session_id);
        for ($i=1; $i <= 60; $i++) {
            $answer = $answerPack->{"answer_$i"};
            $correctAnswer = MultipleChoice::find($quest_pack->{"quest_id_$i"})->correct_answer;
            if ($answer == $correctAnswer) {
                $correct = $correct + 1;
            } elseif ($answer == null) {
                $notAnswered = $notAnswered + 1;
            } else {
                $wrong = $wrong + 1;
            }
        }

        // calculate score
        $score = ($correct / 60) * 100;

        // save the data
        $examSession -> score = $score;
        $examSession -> correct_answer = $correct;
        $examSession -> wrong_answer = $wrong;
        $examSession -> not_answered = $notAnswered;
        $examSession->save();
        

        // make response
        $detail = [
            'id' => $examSession->id,
            'date' => $examSession->created_at,
            'correct' => $correct,
            'wrong' => $wrong,
            'not_answered' => $notAnswered,
            'score' => $score
        ];

        // send response
        return ResourceWrapper::make(true, 200, 'Exam Result', $detail);
    }

    public function user_average($user_id){
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

    public function user_session($user_id){
        $session = ExamSession::where('user_id','=',$user_id)->get();
        return ResourceWrapper::make(true, 200, 'User Session', $session);
    }

    public function session_answer($session_id){
        $answer = SessionAnswer::find($session_id);
        return ResourceWrapper::make(true, 200, 'Session Answer Data', $answer);
    }

    public function session_answer_with_key($session_id){
        $answer = SessionAnswer::find($session_id);
        $quest_pack = SessionQuestion::find($session_id);
        $correctAnswer = array();
        for ($i=1; $i <= 60; $i++) { 
            $correctAnswer["c_answer_$i"] = MultipleChoice::find($quest_pack->{"quest_id_$i"})->correct_answer;
        }

        $detail = [
            'answer' => $answer,
            'correct_answer' => $correctAnswer
        ];
        return ResourceWrapper::make(true, 200, 'Session Answer with Key Data', $detail);
    }
}
