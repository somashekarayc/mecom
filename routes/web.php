<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Demo\DemoController;


Route::controller(DemoController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');


    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('cotact.page');
});

// Admin All Route 
Route::middleware(['auth'])->group(function () {


    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');

        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });
});
