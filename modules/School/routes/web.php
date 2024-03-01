<?php

use Illuminate\Support\Facades\Route;
use Modules\School\app\Http\Controllers\Organizer\EiClassController;
use Modules\School\app\Http\Controllers\Student\MySubjectController;
use Modules\School\app\Http\Controllers\Instructor\MyClassController;
use Modules\School\app\Http\Controllers\Organizer\ManageUserController;
use Modules\School\app\Http\Controllers\Organizer\EiClassSubjectController;

Route::group([
    'as' => 'school.',
], function () {
    Route::group([
        'middleware' => 'organizer',
    ], function () {
        Route::group([
            'as' => 'manage-user.',
            'controller' => ManageUserController::class
        ], function () {
            Route::get('manage-students', 'manageStudents')->name('student');
            Route::get('manage-teachers', 'manageInstructors')->name('teacher');

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
                Route::get('create', 'show')->name('create');
                Route::post('store', 'store')->name('store');

                Route::group([
                    'prefix' => '{eiClass:uuid}',
                ], function () {
                    Route::get('', 'show')->name('edit');
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
            'as' => 'my-class.',
            'controller' => MyClassController::class
        ], function () {
            Route::group([
                'prefix' => 'my-classes',
            ], function () {
                Route::get('', 'index')->name('index');

                Route::group(['prefix' => '{eiClass:uuid}'], function () {
                    Route::group(['prefix' => 'subjects', 'as' => 'subject.'], function () {
                        Route::get('', 'subjects')->name('index');
                    });
                });
            });

            Route::group(['prefix' => 'subjects', 'as' => 'subject.'], function () {
                Route::group([
                    'prefix' => '{subject:uuid}'
                ], function () {
                    Route::get('curriculum', 'curriculum')->name('curriculum');
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
