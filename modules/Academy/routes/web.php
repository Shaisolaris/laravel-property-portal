<?php

use Illuminate\Support\Facades\Route;
use Modules\Academy\app\Http\Controllers\MyCoursesControllerController;

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

Route::middleware([])->prefix('academy')->name('academy.')->group(function () {
    Route::get('my-courses', [MyCoursesControllerController::class,'index'])->name('my-courses');
    Route::get('add-course', [MyCoursesControllerController::class,'create'])->name('add-courses');
});
