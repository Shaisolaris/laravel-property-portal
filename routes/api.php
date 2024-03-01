<?php

use App\Enums\LanguageEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('get-languages', function () {
    return ["languages" => LanguageEnum::getLanguages(), 'appLocale' => App::getLocale()];
});

Route::post('set-language', function (Request $request) {
    $lang = $request->get('lang');

    if (Cookie::has('lang')) {
        Cookie::forget('lang');
    }

    Cookie::forever('lang', $lang);

    App::setLocale($lang);
})->name('set-language');
