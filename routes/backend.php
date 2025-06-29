<?php

use App\Http\Controllers\Backend\ViewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::controller(ViewController::class)->group(function () {
        Route::get('/dashboard',  'dashboard')->name('dashboard');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile',  'edit')->name('profile.edit');
        Route::patch('/profile',  'update')->name('profile.update');
        Route::delete('/profile',  'destroy')->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
