<?php

use Illuminate\Support\Facades\Route;
use Modules\Academy\app\Http\Controllers\MyCoursesController;

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

Route::middleware('auth')->prefix('academy')->name('academy.')->group(function () {
    Route::get('my-courses', [MyCoursesController::class,'index'])->name('my-courses');
    Route::get('add-course', [MyCoursesController::class,'create'])->name('add-courses');
});
