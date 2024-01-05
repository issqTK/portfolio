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

Route::get('config', function() {
    \Artisan::call('config:cache');
    echo 'config cached <br>';
    sleep(0.55);

    \Artisan::call('route:cache');
    echo 'route cached <br>';
    sleep(0.55);

    \Artisan::call('view:cache');
    echo 'view cached <br>';
    sleep(0.10);

    echo 'DONE';
});
Route::get('config-release', function() {
    \Artisan::call('cache:clear');
    echo 'cache cleared <br>';
    sleep(0.55);

    \Artisan::call('config:clear');
    echo 'config cleared <br>';
    sleep(0.55);

    \Artisan::call('route:clear');
    echo 'route cleared <br>';
    sleep(0.55);

    \Artisan::call('view:clear');
    echo 'view cleared <br>';
    sleep(0.10);

    echo 'DONE';
});
