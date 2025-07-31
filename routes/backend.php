<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Mail\Mailables\Content;
use App\Http\Controllers\Backend\Category;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\Backend\ContectController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SitemapController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\TechnologyController;
use App\Http\Controllers\Backend\ServiceCategoryController;

Route::middleware('auth')->prefix('admin/')->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    //*Profile Update Routes
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    //*Banner Routes
    Route::controller(BannerController::class)->prefix('banner/')->name('banner.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update', 'createOrUpdate')->name('createOrUpdate');
    });

    //*Skill Routes
    Route::controller(SkillController::class)->prefix('skill/')->name('skill.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });

    //*Education Routes
    Route::controller(EducationController::class)->prefix('education/')->name('education.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });

    //*Blog Routes
    Route::controller(BlogController::class)->prefix('blog/')->name('blog.')->group(function () {
        Route::get('/view-blog-post/{slug}', 'viewBlogPost')->name('viewBlogPost');
        Route::get('/all-blog', 'allBlog')->name('allBlog');
        Route::get('/{id?}', 'index')->name('index');
        Route::post('/store-update/{id?}', 'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/delete/{id}', 'delete')->name('delete');
        Route::get('/delete-comment/{id}', 'deleteComment')->name('comment.delete');
    });

    //*Category Routes
    Route::controller(CategoryController::class)->prefix('category/')->name('category.')->group(function () {
        Route::get('/{id?}', 'index')->name('index');
        Route::post('/store-update/{id?}', 'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
    //*Category Routes
    Route::controller(ContectController::class)->prefix('contect/')->name('contect.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/view/{id}', 'view')->name('view');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
    //*Category Routes
    Route::controller(TechnologyController::class)->prefix('technology/')->name('technology.')->group(function () {
        Route::get('/{id?}', 'index')->name('index');
        Route::post('/store-or-pdate/{id?}', 'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
    //*Category Routes
    Route::controller(ProjectController::class)->prefix('project/')->name('project.')->group(function () {
        Route::get('/all-project', 'allProject')->name('allProject');
        Route::get('view/{id}', 'view')->name('view');
        Route::get('/{id?}', 'index')->name('index');
        Route::post('/store-or-pdate/{id?}', 'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });


    //*setting Routes
    Route::prefix('/setting')->controller(SettingController::class)->name('settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/general', 'updateGeneral')->name('general.update');
        Route::post('/seo', 'updateSeo')->name('seo.update');
        Route::post('/tracking', 'updateTracking')->name('tracking.update');
    });
    Route::get('sitemap/download', [SitemapController::class, 'download'])->name('sitemap.download');

    //*Services Categoty Routes
    Route::controller(ServiceCategoryController::class)->prefix('service-category/')->name('service.category.')->group(function () {
        Route::get('/{id?}', 'index')->name('index');
        Route::post('/store-or-update/{id?}', 'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/edit/{id}', 'index')->name('edit');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
    //*Services Routes
    Route::controller(ServiceController::class)->prefix('service/')->name('service.')->group(function () {
        Route::get('/{id?}', 'index')->name('index');
        Route::post('/store-or-update/{id?}', 'storeOrUpdate')->name('storeOrUpdate');
        Route::get('/edit/{id}', 'index')->name('edit');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
});

require __DIR__ . '/auth.php';
