<?php

use Modules\Auth\app\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\RoutePath;
use Modules\Auth\app\Http\Controllers\OccupationsController;
use Modules\Auth\app\Http\Controllers\RegisteredController;
use Modules\Auth\app\Http\Controllers\UploadProfileAvatarController;
use Modules\Auth\app\Http\Controllers\UserDetailController;
use Modules\Auth\app\Http\Controllers\ValidateOtpCodeController;

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

Route::middleware('guest')->group(function () {

    // Authentication...
    Route::get(RoutePath::for('login', '/login'), [AuthenticatedSessionController::class, 'create'])
        ->middleware(['guest:' . config('fortify.guard')])
        ->name('login');
    Route::post(RoutePath::for('login', '/login'), [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:' . config('fortify.guard'),
            config('fortify.limiters.login') ? 'throttle:' . config('fortify.limiters.login') : null,
        ]));


    // Registration...
    Route::get(RoutePath::for('register', '/register'), [RegisteredController::class, 'create'])
        ->middleware(['guest:' . config('fortify.guard')])
        ->name('register');
    Route::post(RoutePath::for('register', '/register'), [RegisteredController::class, 'store'])
        ->middleware(['guest:' . config('fortify.guard')]);
});

// Verify otp code
Route::middleware(['auth'])->name('registration.')->controller(ValidateOtpCodeController::class)->group(function () {
    Route::middleware('user.data')->get('otp-form', 'create')->name('otp-form');
    Route::post('otp-form/verify', 'verify')->name('verify');
    Route::post('otp-form/resend', 'resend')->name('resend');
    Route::post('otp-form/cancel', 'cancel')->name('cancel');
});


Route::middleware('auth')->group(function () {
    // User data
    Route::middleware('user.data:2')->resource('occupations', OccupationsController::class)->names('occupations');
    Route::middleware('user.data:3')->resource('profile-avatar', UploadProfileAvatarController::class)->names('profile-avatar');
    Route::middleware('user.data:4')->resource('user-detail', UserDetailController::class)->names('user-detail');

});
