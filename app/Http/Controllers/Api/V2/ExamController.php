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
        $multipleChoices = MultipleChoice::where('question_type', 'pusat')->inRandomOrder()->limit(30)->get();

        $examSession = new ExamSession;
        $examSession->user_id = $user_id;
        $examSession->type = 'pusat';
        $examSession->save();

        $mpPack = new SessionQuestion;
        $mpPack->id = $examSession->id;
        $mpPack->quest_id_1 = $multipleChoices[0]->id;
        $mpPack->quest_id_2 = $multipleChoices[1]->id;
        $mpPack->quest_id_3 = $multipleChoices[2]->id;
        $mpPack->quest_id_4 = $multipleChoices[3]->id;
        $mpPack->quest_id_5 = $multipleChoices[4]->id;
        $mpPack->quest_id_6 = $multipleChoices[5]->id;
        $mpPack->quest_id_7 = $multipleChoices[6]->id;
        $mpPack->quest_id_8 = $multipleChoices[7]->id;
        $mpPack->quest_id_9 = $multipleChoices[8]->id;
        $mpPack->quest_id_10 = $multipleChoices[9]->id;
        $mpPack->quest_id_11 = $multipleChoices[10]->id;
        $mpPack->quest_id_12 = $multipleChoices[11]->id;
        $mpPack->quest_id_13 = $multipleChoices[12]->id;
        $mpPack->quest_id_14 = $multipleChoices[13]->id;
        $mpPack->quest_id_15 = $multipleChoices[14]->id;
        $mpPack->quest_id_16 = $multipleChoices[15]->id;
        $mpPack->quest_id_17 = $multipleChoices[16]->id;
        $mpPack->quest_id_18 = $multipleChoices[17]->id;
        $mpPack->quest_id_19 = $multipleChoices[18]->id;
        $mpPack->quest_id_20 = $multipleChoices[19]->id;
        $mpPack->quest_id_21 = $multipleChoices[20]->id;
        $mpPack->quest_id_22 = $multipleChoices[21]->id;
        $mpPack->quest_id_23 = $multipleChoices[22]->id;
        $mpPack->quest_id_24 = $multipleChoices[23]->id;
        $mpPack->quest_id_25 = $multipleChoices[24]->id;
        $mpPack->quest_id_26 = $multipleChoices[25]->id;
        $mpPack->quest_id_27 = $multipleChoices[26]->id;
        $mpPack->quest_id_28 = $multipleChoices[27]->id;
        $mpPack->quest_id_29 = $multipleChoices[28]->id;
        $mpPack->quest_id_30 = $multipleChoices[29]->id;
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
        $multipleChoices = MultipleChoice::where('question_type', 'daerah')->inRandomOrder()->limit(30)->get();

        $examSession = new ExamSession;
        $examSession->user_id = $user_id;
        $examSession->type = 'daerah';
        $examSession->save();

        $mpPack = new SessionQuestion;
        $mpPack->id = $examSession->id;
        $mpPack->quest_id_1 = $multipleChoices[0]->id;
        $mpPack->quest_id_2 = $multipleChoices[1]->id;
        $mpPack->quest_id_3 = $multipleChoices[2]->id;
        $mpPack->quest_id_4 = $multipleChoices[3]->id;
        $mpPack->quest_id_5 = $multipleChoices[4]->id;
        $mpPack->quest_id_6 = $multipleChoices[5]->id;
        $mpPack->quest_id_7 = $multipleChoices[6]->id;
        $mpPack->quest_id_8 = $multipleChoices[7]->id;
        $mpPack->quest_id_9 = $multipleChoices[8]->id;
        $mpPack->quest_id_10 = $multipleChoices[9]->id;
        $mpPack->quest_id_11 = $multipleChoices[10]->id;
        $mpPack->quest_id_12 = $multipleChoices[11]->id;
        $mpPack->quest_id_13 = $multipleChoices[12]->id;
        $mpPack->quest_id_14 = $multipleChoices[13]->id;
        $mpPack->quest_id_15 = $multipleChoices[14]->id;
        $mpPack->quest_id_16 = $multipleChoices[15]->id;
        $mpPack->quest_id_17 = $multipleChoices[16]->id;
        $mpPack->quest_id_18 = $multipleChoices[17]->id;
        $mpPack->quest_id_19 = $multipleChoices[18]->id;
        $mpPack->quest_id_20 = $multipleChoices[19]->id;
        $mpPack->quest_id_21 = $multipleChoices[20]->id;
        $mpPack->quest_id_22 = $multipleChoices[21]->id;
        $mpPack->quest_id_23 = $multipleChoices[22]->id;
        $mpPack->quest_id_24 = $multipleChoices[23]->id;
        $mpPack->quest_id_25 = $multipleChoices[24]->id;
        $mpPack->quest_id_26 = $multipleChoices[25]->id;
        $mpPack->quest_id_27 = $multipleChoices[26]->id;
        $mpPack->quest_id_28 = $multipleChoices[27]->id;
        $mpPack->quest_id_29 = $multipleChoices[28]->id;
        $mpPack->quest_id_30 = $multipleChoices[29]->id;
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

        $multipleChoices = MultipleChoice::whereIn('id',[
            $mpPack->quest_id_1,
            $mpPack->quest_id_2,
            $mpPack->quest_id_3,
            $mpPack->quest_id_4,
            $mpPack->quest_id_5,
            $mpPack->quest_id_6,
            $mpPack->quest_id_7,
            $mpPack->quest_id_8,
            $mpPack->quest_id_9,
            $mpPack->quest_id_10,
            $mpPack->quest_id_11,
            $mpPack->quest_id_12,
            $mpPack->quest_id_13,
            $mpPack->quest_id_14,
            $mpPack->quest_id_15,
            $mpPack->quest_id_16,
            $mpPack->quest_id_17,
            $mpPack->quest_id_18,
            $mpPack->quest_id_19,
            $mpPack->quest_id_20,
            $mpPack->quest_id_21,
            $mpPack->quest_id_22,
            $mpPack->quest_id_23,
            $mpPack->quest_id_24,
            $mpPack->quest_id_25,
            $mpPack->quest_id_26,
            $mpPack->quest_id_27,
            $mpPack->quest_id_28,
            $mpPack->quest_id_29,
            $mpPack->quest_id_30,
        ]);

        $multipleChoicePaginated = $multipleChoices->paginate(1);

        return ResourceWrapper::make(true, 200, 'Exam Questions', $multipleChoicePaginated);
    }
   
    public function save_answer(Request $request){
        $answerPack = SessionAnswer::find($request->session_id);
        for ($i=1; $i < 31; $i++) { 
            if ($request->{"answer_$i"} != null) {
                $answerPack->{"answer_$i"} = $request->{"answer_$i"};
            }
        }
        $answerPack->save();

        // return response
        return ResourceWrapper::make(true, 200, 'Answer Saved Sucessfully', $answer_pack);
    }

    public function calculate_score(Request $request){
        // same as save answer at first
        $answerPack = SessionAnswer::find($request->session_id);
        for ($i=1; $i < 31; $i++) { 
            if ($request->{"answer_$i"} != null) {
                $answerPack->{"answer_$i"} = $request->{"answer_$i"};
            }
        }
        $answerPack->save();

        // get correct answer
        $quest_pack = SessionQuestion::find($request->session_id);
        $c_answer_1 = MultipleChoice::find($quest_pack->quest_id_1)->correct_answer;
        $c_answer_2 = MultipleChoice::find($quest_pack->quest_id_2)->correct_answer;
        $c_answer_3 = MultipleChoice::find($quest_pack->quest_id_3)->correct_answer;
        $c_answer_4 = MultipleChoice::find($quest_pack->quest_id_4)->correct_answer;
        $c_answer_5 = MultipleChoice::find($quest_pack->quest_id_5)->correct_answer;
        $c_answer_6 = MultipleChoice::find($quest_pack->quest_id_6)->correct_answer;
        $c_answer_7 = MultipleChoice::find($quest_pack->quest_id_7)->correct_answer;
        $c_answer_8 = MultipleChoice::find($quest_pack->quest_id_8)->correct_answer;
        $c_answer_9 = MultipleChoice::find($quest_pack->quest_id_9)->correct_answer;
        $c_answer_11 = MultipleChoice::find($quest_pack->quest_id_11)->correct_answer;
        $c_answer_12 = MultipleChoice::find($quest_pack->quest_id_12)->correct_answer;
        $c_answer_13 = MultipleChoice::find($quest_pack->quest_id_13)->correct_answer;
        $c_answer_14 = MultipleChoice::find($quest_pack->quest_id_14)->correct_answer;
        $c_answer_15 = MultipleChoice::find($quest_pack->quest_id_15)->correct_answer;
        $c_answer_16 = MultipleChoice::find($quest_pack->quest_id_16)->correct_answer;
        $c_answer_17 = MultipleChoice::find($quest_pack->quest_id_17)->correct_answer;
        $c_answer_18 = MultipleChoice::find($quest_pack->quest_id_18)->correct_answer;
        $c_answer_19 = MultipleChoice::find($quest_pack->quest_id_19)->correct_answer;
        $c_answer_10 = MultipleChoice::find($quest_pack->quest_id_10)->correct_answer;
        $c_answer_20 = MultipleChoice::find($quest_pack->quest_id_20)->correct_answer;
        $c_answer_21 = MultipleChoice::find($quest_pack->quest_id_21)->correct_answer;
        $c_answer_22 = MultipleChoice::find($quest_pack->quest_id_22)->correct_answer;
        $c_answer_23 = MultipleChoice::find($quest_pack->quest_id_23)->correct_answer;
        $c_answer_24 = MultipleChoice::find($quest_pack->quest_id_24)->correct_answer;
        $c_answer_25 = MultipleChoice::find($quest_pack->quest_id_25)->correct_answer;
        $c_answer_26 = MultipleChoice::find($quest_pack->quest_id_26)->correct_answer;
        $c_answer_27 = MultipleChoice::find($quest_pack->quest_id_27)->correct_answer;
        $c_answer_28 = MultipleChoice::find($quest_pack->quest_id_28)->correct_answer;
        $c_answer_29 = MultipleChoice::find($quest_pack->quest_id_29)->correct_answer;
        $c_answer_30 = MultipleChoice::find($quest_pack->quest_id_30)->correct_answer;

        // looping
        $correct = 0;
        $wrong = 0;
        $notAnswered = 0;
        $examSession = ExamSession::find($request->session_id);
        for ($i=1; $i < 31; $i++) { 
            if ($answerPack->{"answer_$i"} == ${"c_answer_$i"}) {
                $correct = $correct + 1;
            } elseif ($answerPack->{"answer_$i"} == null) {
                $notAnswered = $notAnswered + 1;
            } else {
                $wrong = $wrong + 1;
            }
        }

        // calculate score
        $score = ($correct / 30) * 100;

        // save the data
        $examSession -> score = $score;
        $examSession -> correct_answer = $correct;
        $examSession -> wrong_answer = $wrong;
        $examSession -> notAnswered = $notAnswered;
        $examSession->save();
        

        // make response
        $detail = [
            'id' => $examSession->id,
            'date' => date("d-m-Y", $examSession->created_at),
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
        return ResourceWrapper::make(true, 'User Average Score', $response);
    }

    public function user_session($user_id){
        $session = ExamSession::where('user_id','=',$user_id)->get();
        return ResourceWrapper::make(true, 'User Session', $session);
    }
}
