<?php

use Modules\Auth\app\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\RoutePath;
use Modules\Auth\app\Http\Controllers\OccupationsController;
use Modules\Auth\app\Http\Controllers\PasswordController;
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

    Route::prefix('/set-password/{uuid}/{token}')
        ->middleware(['guest:' . config('fortify.guard'), 'signed'])
        ->group(function () {
            Route::get('/', [PasswordController::class, 'create'])->name('register.set-password.form');
            Route::post('/', [PasswordController::class, 'store'])->name('register.set-password.save');

        });
});


Route::middleware(['auth'])->group(function () {
    // Verify otp code
    Route::name('registration.')->group(function () {

        Route::name('otp.')->prefix('otp')->controller(ValidateOtpCodeController::class)
            ->group(function () {
                Route::get('form', 'create')->name('form');

                Route::post('verify', 'verify')->name('verify');
                Route::post('resend', 'resend')->name('resend');
                Route::post('cancel', 'cancel')->name('cancel');
            });

        Route::resource('occupations', OccupationsController::class)->names('occupations');
        Route::resource('profile-avatar', UploadProfileAvatarController::class)->names('profile-avatar');
        Route::resource('user-detail', UserDetailController::class)->names('user-detail');

        Route::get('waiting-window', [UserDetailController::class, 'waitingWindow'])->name('waiting-window');
    });
});
