<?php

use Illuminate\Support\Facades\Route;
use Modules\Quiz\app\Http\Controllers\QuizController;

Route::group([
    'middleware' => 'student_instructor',
    'prefix' => 'quizzes',
    'as' => 'quiz.',
], function () {
    Route::resource('quiz', QuizController::class)->names('quiz');
});
