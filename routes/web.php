<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MainHomeController;
use App\Livewire\Comment;
use Illuminate\Support\Facades\Route;



Route::controller(MainHomeController::class)->group(function () {

    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/project', 'project')->name('project');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/service-details', 'serviceDatails')->name('service-datails');
    Route::get('/project-details', 'projectDatails')->name('project-datails');
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-details/{slug}', 'blogDetails')->name('blog.details');
    Route::get('/blog/{category}', 'categoryByBlog')->name('category.blog');
});
Route::post('/comment', [Comment::class])->name('comment');
