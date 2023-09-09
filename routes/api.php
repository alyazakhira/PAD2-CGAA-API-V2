<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V2\UserController;
use App\Http\Controllers\Api\V2\MultipleChoiceController;
use App\Http\Controllers\Api\V2\ExamSessionController;
use App\Http\Controllers\Api\V2\ExamController;
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
        Route::apiResource('/exam-session', ExamSessionController::class);

        Route::controller(PaginatedController::class)->group(function(){
            Route::get('/user-paginated/{item_count}', 'paginated_user');
            Route::get('/multiple-choice-paginated/{item_count}', 'paginated_multiple_choice');
            Route::get('/multiple-choice-paginated-pusat/{item_count}', 'paginated_mp_pusat');
            Route::get('/multiple-choice-paginated-daerah/{item_count}', 'paginated_mp_daerah');
        });

        Route::controller(ExamController::class)->group(function(){
            Route::get('/exam-data/{session_id}', 'get_exam_question');
            Route::get('/exam-pusat/{user_id}', 'begin_exam_pusat');
            Route::get('/exam-daerah/{user_id}', 'begin_exam_daerah');
            Route::post('/save-answer/{session_id}', 'save_answer');
            Route::post('/calculate-score/{session_id}', 'calculate_score');
            Route::get('/average-score/{user_id}', 'user_average');
            Route::get('/user-session/{user_id}', 'user_session');
            Route::get('/session-answer/{session_id}', 'session_answer');
            Route::get('/session-answer-key/{session_id}', 'session_answer_with_key');
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
