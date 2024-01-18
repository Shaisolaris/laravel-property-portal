<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('set-language', function (Request $request) {
    $lang = $request->get('lang');
    $cookieLang = Cookie::get('lang');

    if (!Cookie::has('lang') || $cookieLang !== $lang) {
        Cookie::forever('lang', $lang);
    }

    App::setLocale($lang);
})->name('set-language');