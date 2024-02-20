<?php

use Illuminate\Support\Facades\Route;
use Modules\School\app\Http\Controllers\Organizer\EiClassController;
use Modules\School\app\Http\Controllers\Organizer\ManageUserController;
use Modules\School\app\Http\Controllers\Instructor\MyClassController;
use Modules\School\app\Http\Controllers\Student\MySubjectController;
use Modules\School\app\Http\Controllers\Organizer\EiClassSubjectController;

Route::group([
    'as' => 'school.',
], function () {
    Route::group([
        'middleware' => 'organizer',
    ], function () {
        Route::group([
            'prefix' => 'manage-users',
            'as' => 'manage-user.',
            'controller' => ManageUserController::class
        ], function () {
            Route::get('', 'index')->name('index');

            Route::group([
                'prefix' => '{user:uuid}'
            ], function () {
                Route::post('status-change', 'studentAction')->name('status-change');
            });
        });

        Route::group([
            'prefix' => 'classes',
            'as' => 'class.',
        ], function () {
            Route::group([
                'as' => 'subject.',
                'controller' => EiClassSubjectController::class
            ], function () {
                Route::group([
                    'prefix' => '{eiClass:uuid}/subjects',
                ], function () {
                    Route::get('', 'index')->name('index');
                    Route::post('store', 'store')->name('create');
                    Route::post('update', 'update')->name('update');

                    Route::group([
                        'prefix' => '{classSubject:uuid}',
                    ], function () {
                        Route::delete('destroy', 'destroy')->name('delete');
                    });
                });
            });

            Route::group([
                'controller' => EiClassController::class
            ], function () {
                Route::get('', 'index')->name('list');
                Route::get('create', 'createOrEdit')->name('create');
                Route::post('store', 'store')->name('store');

                Route::group([
                    'prefix' => '{eiClass:uuid}',
                ], function () {
                    Route::get('edit', 'createOrEdit')->name('edit');
                    Route::get('schedule', 'schedule')->name('schedule');

                    Route::put('update', 'update')->name('update');
                    Route::delete('destroy', 'destroy')->name('delete');
                });
            });
        });
    });

    Route::group([
        'middleware' => 'instructor',
    ], function () {
        Route::group([
            'prefix' => 'my-classes',
            'as' => 'my-class.',
            'controller' => MyClassController::class
        ], function () {
            Route::get('', 'index')->name('index');

            Route::group(['prefix' => 'quizzes', 'as' => 'quiz.'], function () {
                Route::get('', 'quizzes')->name('index');
                Route::get('create', 'quizCreate')->name('create');

                Route::group([
                    'prefix' => '{quiz:uuid}'
                ], function () {
                    Route::get('edit', 'quizEdit')->name('edit');
                });
            });

            Route::group(['prefix' => '{eiClass:uuid}'], function () {
                Route::group(['prefix' => 'subjects'], function () {
                    Route::get('', 'subjects')->name('subject');

                    Route::group([
                        'prefix' => '{subject:uuid}'
                    ], function () {
                        Route::get('edit', 'show')->name('edit');
                    });
                });
            });
        });
    });

    Route::group([
        'middleware' => 'student',
    ], function () {
        Route::group([
            'prefix' => 'my-subjects',
            'as' => 'student-subject.',
            'controller' => MySubjectController::class
        ], function () {
            Route::get('', 'index')->name('index');
        });
    });
});
