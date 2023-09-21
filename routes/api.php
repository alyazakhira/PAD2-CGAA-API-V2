<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V2\UserController;
use App\Http\Controllers\Api\V2\MultipleChoiceController;
use App\Http\Controllers\Api\V2\EssayController;
use App\Http\Controllers\Api\V2\CaseStudyController;
use App\Http\Controllers\Api\V2\ExamSessionController;
use App\Http\Controllers\Api\V2\ExamController;
use App\Http\Controllers\Api\V2\ExamResultController;
use App\Http\Controllers\Api\V2\AuthController;
use App\Http\Controllers\Api\V2\PaginatedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v2')->group(function(){
    Route::middleware('auth:sanctum')->group(function(){
        Route::apiResource('/users', UserController::class);
        Route::apiResource('/multiple-choice', MultipleChoiceController::class);
        Route::apiResource('/essay', EssayController::class);
        Route::apiResource('/case-study', CaseStudyController::class);
        Route::apiResource('/exam-session', ExamSessionController::class);

        Route::controller(PaginatedController::class)->group(function(){
            Route::get('/paginated/user/{item_count}', 'paginated_user');
            Route::get('/paginated/multiple-choice/{item_count}', 'paginated_multiple_choice');
            Route::get('/paginated/multiple-choice/pusat/{item_count}', 'paginated_mp_pusat');
            Route::get('/paginated/multiple-choice/daerah/{item_count}', 'paginated_mp_daerah');
            Route::get('/paginated/essay/pusat/{item_count}', 'paginated_ey_pusat');
            Route::get('/paginated/essay/daerah/{item_count}', 'paginated_ey_daerah');
            Route::get('/paginated/case-study/pusat/{item_count}', 'paginated_cs_pusat');
            Route::get('/paginated/case-study/daerah/{item_count}', 'paginated_cs_daerah');
        });

        Route::controller(ExamController::class)->group(function(){
            // [GET] Generate Exam Session Routes
            Route::get('/exam/session/pusat/{user_id}', 'begin_exam_pusat');
            Route::get('/exam/session/daerah/{user_id}', 'begin_exam_daerah');

            // [GET] Retrieve Question Routes
            Route::get('/exam/multiple-choice/{session_id}', 'get_mp_question');
            Route::get('/exam/essay/{session_id}', 'get_ey_question');
            Route::get('/exam/case-study/{session_id}', 'get_cs_question'); //[ALPHA]

            // [GET] Retrieve Answer Routes
            Route::get('/exam/multiple-choice/answer/{session_id}', 'get_mp_answer');
            Route::get('/exam/essay/answer/{session_id}', 'get_ey_answer');
            Route::get('/exam/case-study/answer/{session_id}', 'get_cs_answer'); //[ALPHA]

            // [POST] Save Answer Routes
            Route::post('/exam/multiple-choice/answer/{session_id}', 'save_mp_answer');
            Route::post('/exam/essay/answer/{session_id}', 'save_ey_answer');
            Route::post('/exam/case-study/answer/{session_id}', 'save_cs_answer'); //[ALPHA]

            // [POST] End Exam Routes
            Route::post('/exam/session-1/end/{session_id}', 'finish_first_session');
            Route::post('/exam/session-2/end/{session_id}', 'finish_second_session');
        });

        Route::controller(ExamResultController::class)->group(function(){
            Route::get('/result/multiple-choice/{session_id}', 'get_mp_key');
            Route::get('/result/session/{user_id}', 'get_user_session');
            Route::get('/result/average-score/{user_id}', 'get_user_average');
        });

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::controller(AuthController::class)->group(function(){
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');
        Route::get('/forget-password', 'input_email_form')->name('input.email.form');
        Route::post('/forget-password', 'input_email')->name('input.email');
        Route::get('/reset-password/{email}/{token}', 'reset_password_form')->name('reset.pass.form');
        Route::post('/reset-password', 'reset_password')->name('reset.pass');
    });
});
