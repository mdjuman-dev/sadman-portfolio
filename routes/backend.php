<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\Category;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\EducationController;

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

    //*Skill Routes
    Route::controller(SkillController::class)->prefix('skill/')->name('skill.')->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::put('/update/{id}',  'update')->name('update');
        Route::delete('/delete/{id}',  'destroy')->name('destroy');
    });

    //*Education Routes
    Route::controller(EducationController::class)->prefix('education/')->name('education.')->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::put('/update/{id}',  'update')->name('update');
        Route::delete('/delete/{id}',  'destroy')->name('destroy');
    });

    //*Blog Routes
    Route::controller(BlogController::class)->prefix('blog/')->name('blog.')->group(function () {
        Route::get('/view-blog-post/{slug}',  'viewBlogPost')->name('viewBlogPost');
        Route::get('/all-blog',  'allBlog')->name('allBlog');
        Route::get('/{id?}',  'index')->name('index');
        Route::post('/store-update/{id?}',  'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/delete/{id}',  'delete')->name('delete');
        Route::get('/delete-comment/{id}',  'deleteComment')->name('comment.delete');
    });

    //*Category Routes
    Route::controller(CategoryController::class)->prefix('category/')->name('category.')->group(function () {
        Route::get('/{id?}',  'index')->name('index');
        Route::post('/store-update/{id?}',  'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/delete/{id}',  'delete')->name('delete');
    });
});

require __DIR__ . '/auth.php';
