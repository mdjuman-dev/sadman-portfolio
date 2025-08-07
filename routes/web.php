<?php

use App\Models\Blog;
use App\Models\Project;
use App\Livewire\Comment;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Livewire\ContactForm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SitemapController;
use App\Http\Controllers\Frontend\MainHomeController;




Route::controller(MainHomeController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/project', 'project')->name('project');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/service-details', 'serviceDetails')->name('service-details');
    Route::get('/project-details/{slig}', 'projectDetails')->name('project-details');
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
Route::get('/contact', ContactForm::class)->name('contact');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/{slug}', [ServiceController::class, 'serviceShow'])->name('service.show');
