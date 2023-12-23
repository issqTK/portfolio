<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SingleController;
use App\Http\Controllers\LanguageController;

use App\Http\Middleware\Localization;

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::get('/work', [SingleController::class, 'work'])->name('work');

Route::get('/work/{slug}', [SingleController::class, 'workView'])->name('work.view');

Route::post('contact', [SingleController::class, 'contactPost'])->name('contact.post');

