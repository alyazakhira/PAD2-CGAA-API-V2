<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Essay;
use App\Models\CaseStudy;
use App\Models\MultipleChoice;
use App\Models\ExamSession;
use App\Models\SessionAnswer;
use App\Models\SessionQuestion;

class ExamController extends Controller
{
    public function begin_exam_pusat($user_id){
        // Retrieve and Sort Multiple Choices
        $multipleChoices = MultipleChoice::where('question_type', 'pusat')->inRandomOrder()->limit(60)->get();
        $multipleChoicesID = array();
        foreach ($multipleChoices as $mp) { array_push($multipleChoicesID, $mp->id); }
        $multipleChoicesSorted = MultipleChoice::whereIn('id',$multipleChoicesID)->get();

        // Retrieve and Sort Essays
        $essays = Essay::where('question_type', 'pusat')->inRandomOrder()->limit(5)->get();
        $essayID = array();
        foreach ($essays as $ey) { array_push($essayID, $ey->id); }
        $esaysSorted = Essay::whereIn('id',$essayID)->get();

        // [ALPHA] Retrieve and Sort Case Studies
        $caseStudies = CaseStudy::where('question_type', 'pusat')->inRandomOrder()->limit(1)->get();

        // Generate new Exam Session
        $examSession = new ExamSession;
        $examSession->user_id = $user_id;
        $examSession->status = 1;
        $examSession->type = 'pusat';
        $examSession->save();

        // Generate new Session Question
        $sessionQuestion = new SessionQuestion;
        $sessionQuestion->id = $examSession->id;

        // Assign Multiple Choices ID
        for ($i=1; $i <= 60; $i++) {
            $j = $i - 1;
            $sessionQuestion->{"mp_id_$i"} = $multipleChoicesSorted[$j]->id;
        }

        // Assign Essays ID
        for ($i=1; $i <= 5; $i++) {
            $j = $i - 1;
            $sessionQuestion->{"ey_id_$i"} = $esaysSorted[$j]->id;
        }

        // [ALPHA] Assign Case Studies ID
        $sessionQuestion->cs_id = $caseStudies[0]->id;

        // Save Session Question
        $sessionQuestion->save();

        // Generate Session Answer
        $answerPack = new SessionAnswer;
        $answerPack->id = $examSession->id;
        $answerPack->save();

        // Return the data
        $data = [ 'session_id' => $examSession->id, ];
        return ResourceWrapper::make(true, 200, 'Successfully Create Exam Session - Pusat', $data);
    }

    public function begin_exam_daerah($user_id){
        // Retrieve and Sort Multiple Choices
        $multipleChoices = MultipleChoice::where('question_type', 'daerah')->inRandomOrder()->limit(60)->get();
        $multipleChoicesID = array();
        foreach ($multipleChoices as $mp) { array_push($multipleChoicesID, $mp->id); }
        $multipleChoicesSorted = MultipleChoice::whereIn('id',$multipleChoicesID)->get();

        // Retrieve and Sort Essays
        $essays = Essay::where('question_type', 'daerah')->inRandomOrder()->limit(5)->get();
        $essayID = array();
        foreach ($essays as $ey) { array_push($essayID, $ey->id); }
        $esaysSorted = Essay::whereIn('id',$essayID)->get();

        // [ALPHA] Retrieve and Sort Case Studies
        $caseStudies = CaseStudy::where('question_type', 'daerah')->inRandomOrder()->limit(1)->get();

        // Generate new Exam Session
        $examSession = new ExamSession;
        $examSession->user_id = $user_id;
        $examSession->status = 1;
        $examSession->type = 'daerah';
        $examSession->save();

        // Generate new Session Question
        $sessionQuestion = new SessionQuestion;
        $sessionQuestion->id = $examSession->id;

        // Assign Multiple Choices ID
        for ($i=1; $i <= 60; $i++) {
            $j = $i - 1;
            $sessionQuestion->{"mp_id_$i"} = $multipleChoicesSorted[$j]->id;
        }

        // Assign Essays ID
        for ($i=1; $i <= 5; $i++) {
            $j = $i - 1;
            $sessionQuestion->{"ey_id_$i"} = $esaysSorted[$j]->id;
        }

        // [ALPHA] Assign Case Studies ID
        $sessionQuestion->cs_id = $caseStudies[0]->id;

        // Save Session Question
        $sessionQuestion->save();

        // Generate Session Answer
        $answerPack = new SessionAnswer;
        $answerPack->id = $examSession->id;
        $answerPack->save();

        // Return the data
        $data = [ 'session_id' => $examSession->id, ];
        return ResourceWrapper::make(true, 200, 'Successfully Create Exam Session - Daerah', $data);
    }

    public function get_mp_question($session_id){
        $sessionQuestion = SessionQuestion::find($session_id);

        // Retrieve and assign multiple choices data
        $mpID = array();
        for ($i=1; $i <= 60 ; $i++) { array_push($mpID, $sessionQuestion->{"mp_id_$i"}); }
        $multipleChoices = MultipleChoice::whereIn('id',$mpID);
        $multipleChoicePaginated = $multipleChoices->paginate(1);

        return ResourceWrapper::make(true, 200, 'Exam Questions - Multiple Choice', $multipleChoicePaginated);
    }

    public function get_ey_question($session_id){
        $sessionQuestion = SessionQuestion::find($session_id);

        // Retrieve and assign essays data
        $eyID = array();
        for ($i=1; $i <= 5 ; $i++) { array_push($eyID, $sessionQuestion->{"ey_id_$i"}); }
        $essays = Essay::whereIn('id',$eyID);
        $essayPaginated = $essays->paginate(1);

        return ResourceWrapper::make(true, 200, 'Exam Questions - Essay', $essayPaginated);
    }

    public function get_cs_question($session_id){  // [ALPHA]
        $sessionQuestion = SessionQuestion::find($session_id);

        // [ALPHA] Retrieve case studies data
        $caseStudy = CaseStudy::find($sessionQuestion->cs_id);

        return ResourceWrapper::make(true, 200, 'Exam Questions - Case Study', $caseStudy);
    }

    public function get_mp_answer($session_id){
        $sessionAnswer = SessionAnswer::find($session_id);
        $mpAnswer = array();
        for ($i=1; $i <= 60 ; $i++) { $mpAnswer["answer_$i"] = $sessionAnswer->{"mp_answer_$i"}; }
        return ResourceWrapper::make(true, 200, 'Answer Data - Multiple Choice', $mpAnswer);
    }

    public function get_ey_answer($session_id){
        $sessionAnswer = SessionAnswer::find($session_id);
        $eyAnswer = array();
        for ($i=1; $i <= 5 ; $i++) { $eyAnswer["answer_$i"] = $sessionAnswer->{"ey_answer_$i"}; }
        return ResourceWrapper::make(true, 200, 'Answer Data - Essay', $eyAnswer);
    }

    public function get_cs_answer($session_id){  // [ALPHA]
        $sessionAnswer = SessionAnswer::find($session_id);
        $csAnswer = array();
        for ($i=1; $i <= 10 ; $i++) { $csAnswer["answer_$i"] = $sessionAnswer->{"cs_answer_$i"}; }
        return ResourceWrapper::make(true, 200, 'Answer Data - Case Study', $csAnswer);
    }

    public function save_mp_answer(Request $request, $session_id){
        $mpAnswer = SessionAnswer::find($session_id);
        for ($i=1; $i <= 60; $i++) { 
            if ($request->{"answer_$i"} != null) {
                $mpAnswer->{"mp_answer_$i"} = $request->{"answer_$i"};
            }
        }
        $mpAnswer->save();
        $data = [ 'session_id' => $mpAnswer->id, ];

        // return response
        return ResourceWrapper::make(true, 200, 'Answer Saved Sucessfully', $data);
    }

    public function save_ey_answer(Request $request, $session_id){
        $eyAnswer = SessionAnswer::find($session_id);
        for ($i=1; $i <= 5; $i++) { 
            if ($request->{"answer_$i"} != null) {
                $eyAnswer->{"ey_answer_$i"} = $request->{"answer_$i"};
            }
        }
        $eyAnswer->save();
        $data = [ 'session_id' => $eyAnswer->id, ];

        // return response
        return ResourceWrapper::make(true, 200, 'Answer Saved Sucessfully', $data);
    }

    public function save_cs_answer(Request $request, $session_id){  // [ALPHA]
        $csAnswer = SessionAnswer::find($session_id);
        for ($i=1; $i <= 10; $i++) { 
            if ($request->{"answer_$i"} != null) {
                $csAnswer->{"cs_answer_$i"} = $request->{"answer_$i"};
            }
        }
        $csAnswer->save();
        $data = [ 'session_id' => $csAnswer->id, ];

        // return response
        return ResourceWrapper::make(true, 200, 'Answer Saved Sucessfully', $data);
    }

    public function finish_first_session(Request $request, $session_id){
        $questPack = SessionQuestion::find($session_id);
        $answerPack = SessionAnswer::find($session_id);
        $examSession = ExamSession::find($session_id);
        $correct = 0;
        $wrong = 0;
        $empty = 0;

        // Check
        for ($i=1; $i <= 60; $i++) {
            $answer = $answerPack->{"mp_answer_$i"};
            $correctAnswer = MultipleChoice::find($questPack->{"mp_id_$i"})->correct_answer;
            if ($answer == $correctAnswer) {
                $correct += 1;
            } else if (!$answer) {
                $empty += 1;
            } else {
                $wrong += 1;
            }
        }

        // Calculate
        $score = ($correct / 60) * 100;
        
        // Save
        $examSession -> status = 2;
        $examSession -> mp_score = $score;
        $examSession -> mp_correct = $correct;
        $examSession -> mp_wrong = $wrong;
        $examSession->save();

        // Response
        $detail = [
            'id' => $examSession->id,
            'date' => $examSession->created_at,
            'correct' => $correct,
            'wrong' => $wrong,
            'empty' => $empty,
            'score' => $score
        ];

        return ResourceWrapper::make(true, 200, 'First Session Result', $detail);
    }

    public function finish_second_session(Request $request, $session_id){
        $questPack = SessionQuestion::find($session_id);
        $answerPack = SessionAnswer::find($session_id);
        $examSession = ExamSession::find($session_id);
        $eyAnswered = 0;
        $csAnswered = 0;

        // Check Essay
        for ($i=1; $i <= 5; $i++) { 
            if ($answerPack->{"ey_answer_$i"}) {
                $eyAnswered += 1; 
            }
        }

        // Check Case Study
        $caseStudyIns = CaseStudy::find($questPack->cs_id)->instruction_count;
        for ($i=1; $i <= $caseStudyIns; $i++) { 
            if ($answerPack->{"cs_answer_$i"}) {
                $csAnswered += 1;
            }
        }

        // Save
        $examSession -> status = 0;
        $examSession -> ey_answered = $eyAnswered;
        $examSession -> cs_answered = $csAnswered;
        $examSession->save();

        return ResourceWrapper::make(true, 200, 'Exam Result', $examSession);
    }
}
