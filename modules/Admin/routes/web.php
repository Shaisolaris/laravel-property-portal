<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\app\Http\Controllers\AdminController;
use Modules\Admin\app\Http\Controllers\AppSettingController;
use Modules\Admin\app\Http\Controllers\CountryController;
use Modules\Admin\app\Http\Controllers\EducationInstitutionController;
use Modules\Admin\app\Http\Controllers\ProfileController;
use Modules\Admin\app\Http\Controllers\UserController;

Route::group([
    'middleware' => ['auth:sanctum', 'role:admin'],
    'prefix' => 'admin/CXWkUv82',
    'as' => 'admin.',
], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');


    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/', [ProfileController::class, 'save'])->name('profile.save');
        Route::get('/change-password', [ProfileController::class, 'showChangePassword'])->name('profile.change-password.show');
        Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password.save');

    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/{user}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/', [UserController::class, 'store'])->name('user.store');
        Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
        Route::post('/{user}/ban', [UserController::class, 'ban'])->name('user.ban');
        Route::post('/{user}/unban', [UserController::class, 'unban'])->name('user.unban');
        Route::post('/{user}/resend-password-link', [UserController::class, 'resendSetPasswordLink'])->name('user.resend-password-link');
        Route::get('/{user}/documents', [UserController::class, 'documents'])->name('user.documents');

    });

    Route::prefix('education-institution')->group(function () {
        Route::get('/', [EducationInstitutionController::class, 'index'])->name('institution.index');
        Route::get('/create', [EducationInstitutionController::class, 'create'])->name('institution.create');
        Route::get('/{institution}', [EducationInstitutionController::class, 'edit'])->name('institution.edit');
        Route::post('/{institution?}', [EducationInstitutionController::class, 'save'])->name('institution.save');
    });

    Route::prefix('countries')->group(function () {
        Route::get('/', [CountryController::class, 'index'])->name('country.index');
        Route::get('/create', [CountryController::class, 'create'])->name('country.create');
        Route::get('/{country}', [CountryController::class, 'edit'])->name('country.edit');
        Route::post('/', [CountryController::class, 'store'])->name('country.store');
        Route::put('/{country}', [CountryController::class, 'update'])->name('country.update');
        Route::delete('/{country}', [CountryController::class, 'destroy'])->name('country.delete');
        Route::post('/{country}/set-free', [CountryController::class, 'setFree'])->name('country.set-free');
        Route::post('/{country}/set-active', [CountryController::class, 'setActive'])->name('country.set-active');
    });

    Route::prefix('app_settings')->group(function () {
        Route::get('/', [AppSettingController::class, 'edit'])->name('settings.edit');
        Route::post('/', [AppSettingController::class, 'save'])->name('settings.save');
    });


});
