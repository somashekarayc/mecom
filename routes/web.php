<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;




Route::controller(DemoController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');


    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('cotact.page');
});

