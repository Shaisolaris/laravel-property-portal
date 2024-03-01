<?php

use Illuminate\Support\Facades\Route;
use Modules\Quiz\app\Http\Controllers\EiQuizController;
use Modules\Quiz\app\Http\Controllers\EiQuizAnswerController;

Route::group([
    'middleware' => 'student_instructor',
    'prefix' => 'quizzes',
    'as' => 'quiz.',
    'controller' => EiQuizController::class
], function () {
    Route::get('', 'index')->name('index');

    Route::group([
        'middleware' => 'student',
        'as' => 'answer.',
        'prefix' => '{quiz:uuid}/answer',
        'controller' => EiQuizAnswerController::class
    ], function () {
        Route::get('/', 'index')->name('index');
        Route::post('start', 'start')->name('start');
        Route::post('answer', 'answer')->name('submit-answer');
    });

    Route::group([
        'middleware' => 'instructor',
    ], function () {
        Route::post('create', 'store')->name('create');

        Route::group([
            'prefix' => '{quiz:uuid}'
        ], function () {
            Route::get('students', 'quizStudentHomework')->name('student-homeworks');
        });

        Route::group([
            'prefix' => '{homework:uuid}'
        ], function () {
            Route::get('answers', 'checkAnswers')->name('answers');

            Route::put('{studentHomeworkQuizAnswer:uuid}/update-answer', 'updateAnswer')->name('update-answer');
        });

        Route::group([
            'as' => 'question.',
            'prefix' => '{quizQuestion:uuid}'
        ], function () {
            Route::delete('delete', 'destroy')->name('delete');
        });
    });
});
