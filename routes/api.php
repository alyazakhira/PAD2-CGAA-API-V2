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
    // Route::middleware('auth:sanctum')->group(function(){
        Route::apiResource('/users', UserController::class);
        Route::apiResource('/multiple-choice', MultipleChoiceController::class);
        Route::apiResource('/exam-session', ExamSessionController::class);

        Route::controller(PaginatedController::class)->group(function(){
            Route::get('/user-paginated/{item_count}', 'paginated_user');
            Route::get('/multiple-choice-paginated/{item_count}', 'paginated_multiple_choice');
        });

        Route::controller(ExamController::class)->group(function(){
            Route::get('/exam-pusat/{user_id}', 'exam_pusat');
            Route::get('/exam-daerah/{user_id}', 'exam_daerah');
            Route::post('/save-answer', 'save_answer');
            Route::post('/exam-result', 'calculate_score');
            Route::get('/average-score/{user_id}', 'user_average');
            Route::get('/user-session/{user_id}', 'user_session');
        });

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // });

    Route::controller(AuthController::class)->group(function(){
        Route::post('/register', 'register')->name('login');
        Route::post('/login', 'login')->name('register');
    });
});
