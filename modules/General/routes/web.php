<?php

use Illuminate\Support\Facades\Route;
use Modules\General\app\Http\Controllers\CreationStepsController;
use Modules\General\app\Http\Controllers\GeneralController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {


    Route::resource('general', GeneralController::class)->names('general');

    // TODO:
    Route::get('academy/add/course', [CreationStepsController::class,'create'])->name('academy.add-step');
    Route::get('school/add/class', [CreationStepsController::class,'create'])->name('school.add-step');
});
