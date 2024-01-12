<?php

use Inertia\Inertia;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::middleware([
    'universal',
])->group(function () {
    Route::get('/ziggy', fn() => response()->json(new Ziggy));
});


Route::group([
    'as' => 'landing.',
    'controller' => LandingController::class
], function () {
    Route::get('/', 'index')->name('landing.index');
});


Route::group([], function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Welcome');
    })->name('dashboard');
});
