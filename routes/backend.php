<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\backend\BannerController;


Route::middleware('auth')->prefix('admin/')->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard',  'dashboard')->name('dashboard');
    });

    //*Profile Update Routes
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile',  'edit')->name('profile.edit');
        Route::patch('/profile',  'update')->name('profile.update');
        Route::delete('/profile',  'destroy')->name('profile.destroy');
    });

    //*Banner Routes
    Route::controller(BannerController::class)->prefix('banner/')->name('banner.')->group(function () {
        Route::get('/',  'index')->name('index');
        Route::post('/update',  'createOrUpdate')->name('createOrUpdate');
    });
});

require __DIR__ . '/auth.php';
