<?php

use Illuminate\Support\Facades\Route;
use Modules\Assignment\app\Http\Controllers\AssignmentController;

Route::group([
    'middleware' => 'student_instructor',
    'as' => 'institution.',
    'prefix' => 'institution',
], function () {
    Route::resource('assignment', AssignmentController::class)->names('assignment');
    Route::post('handler', [AssignmentController::class,'handler'])->name('assignment.handler');
});
