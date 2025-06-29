<?php

use App\Http\Controllers\Frontend\MainHomeController;
use Illuminate\Support\Facades\Route;



Route::controller(MainHomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/project', 'project')->name('project');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
});
