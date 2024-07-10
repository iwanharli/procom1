<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\StatistikController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HeadlineController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuidelineController;
use App\Http\Controllers\Admin\RedactionController;
use App\Http\Controllers\Admin\DisclaimerController;
use App\Http\Controllers\Admin\BreakingNewsController;
use App\Http\Controllers\Admin\AppsController;

Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

        // POS
        Route::resource('pos/post', PostController::class);
        Route::post('/post', [PostController::class, 'store'])->name('store-post');
        Route::post('/get-sub-categories', [PostController::class, 'get_sub_categories'])->name('get-sub-categories');
        Route::get('/pos/published', [PostController::class, 'published'])->name('post-published');
        Route::get('/pos/draft', [PostController::class, 'draft'])->name('post-draft');
        Route::get('/pos/trash', [PostController::class, 'trash'])->name('post-trash');
        Route::get('/pos/restore/{id}', [PostController::class, 'restore_data'])->name('post-restore');
        Route::delete('/pos/force-delete/{id}', [PostController::class, 'force_delete'])->name('post-force-delete');
        Route::resource('pos/category', CategoryController::class);
        Route::resource('pos/tag', TagController::class);

        // Statistik
        Route::resource('statistik', StatistikController::class, [
            'except' => ['show']
        ]);
        Route::post('statistik', [StatistikController::class, 'store'])->name('store-statistik');
        Route::get('statistik/published', [StatistikController::class, 'published'])->name('statistik-published');
        Route::get('statistik/draft', [StatistikController::class, 'draft'])->name('statistik-draft');
        Route::get('statistik/trash', [StatistikController::class, 'trash'])->name('statistik-trash');
        Route::get('statistik/restore/{id}', [StatistikController::class, 'restore_data'])->name('statistik-restore');
        Route::delete('statistik/force-delete/{id}', [StatistikController::class, 'force_delete'])->name('statistik-force-delete');

        // Foto
        Route::resource('photo', PhotoController::class, [
            'except' => ['show']
        ]);
        Route::post('photo', [PhotoController::class, 'store'])->name('store-photo');
        Route::post('photo/gallery/upload', [PhotoController::class, 'uploadGallery'])->name('photo-gallery-upload');
        Route::get('photo/gallery/delete/{id}', [PhotoController::class, 'deleteGallery'])->name('photo-gallery-delete');
        Route::get('photo/published', [PhotoController::class, 'published'])->name('photo-published');
        Route::get('photo/draft', [PhotoController::class, 'draft'])->name('photo-draft');
        Route::get('photo/trash', [PhotoController::class, 'trash'])->name('photo-trash');
        Route::get('photo/restore/{id}', [PhotoController::class, 'restore_data'])->name('photo-restore');
        Route::delete('photo/force-delete/{id}', [PhotoController::class, 'force_delete'])->name('photo-force-delete');

        // Video
        Route::resource('video', VideoController::class, [
            'except' => ['show']
        ]);
        Route::post('video', [VideoController::class, 'store'])->name('store-video');
        Route::get('video/published', [VideoController::class, 'published'])->name('video-published');
        Route::get('video/draft', [VideoController::class, 'draft'])->name('video-draft');
        Route::get('video/trash', [VideoController::class, 'trash'])->name('video-trash');
        Route::get('video/restore/{id}', [VideoController::class, 'restore_data'])->name('video-restore');
        Route::delete('video/force-delete/{id}', [VideoController::class, 'force_delete'])->name('video-force-delete');

        // User
        Route::resource('users/user', UserController::class);
        Route::post('/user', [UserController::class, 'store'])->name('store-user');
        Route::get('/users/user/profile', [UserController::class, 'show'])->name('profile-user');
        Route::get('/users/user/profile/password', [UserController::class, 'change_password'])->name('change-password');
        Route::put('/users/user/profile/{id}', [UserController::class, 'update_profile'])->name('profile-update');
        Route::post('/users/user/upload-profile', [UserController::class, 'upload_profile'])->name('profile-upload');
        Route::post('change-password', [UserController::class, 'update_password'])->name('update.password');

        // Page
        Route::resource('page/redaction', RedactionController::class);
        Route::resource('page/guideline', GuidelineController::class);
        Route::resource('page/disclaimer', DisclaimerController::class);
        Route::resource('page/contact', ContactController::class);

        // Breaking News
        Route::get('/breaking-news', [BreakingNewsController::class, 'categories'])->name('breaking-news');
        Route::get('/breaking-news/{id}', [BreakingNewsController::class, 'breaking_news'])->name('breaking-news-list');
        Route::post('/breaking-news/category', [BreakingNewsController::class, 'store_category'])->name('store-breaking-news-category');
        Route::put('/breaking-news/category/{id}', [BreakingNewsController::class, 'update_category'])->name('update-breaking-news-category');
        Route::delete('/breaking-news/category/{id}', [BreakingNewsController::class, 'destroy_category'])->name('destroy-breaking-news-category');
        Route::resource('settings/breaking-news', BreakingNewsController::class, [
            'except' => ['show']
        ]);
        Route::post('breaking-news', [BreakingNewsController::class, 'store'])->name('store-breaking-news');

        // Headline
        Route::get('/headline', [HeadlineController::class, 'categories'])->name('headline');
        Route::get('/headline/{id}', [HeadlineController::class, 'headline'])->name('headline-list');
        Route::post('/headline/category', [HeadlineController::class, 'store_category'])->name('store-headline-category');
        Route::put('/headline/category/{id}', [HeadlineController::class, 'update_category'])->name('update-headline-category');
        Route::delete('/headline/category/{id}', [HeadlineController::class, 'destroy_category'])->name('destroy-headline-category');
        Route::resource('settings/headline', HeadlineController::class, [
            'except' => ['show']
        ]);
        Route::post('headline', [HeadlineController::class, 'store'])->name('store-headline');
        Route::get('/settings/apps', [AppsController::class, 'index'])->name('apps.index');
        Route::put('/settings/apps/{id}', [AppsController::class, 'update'])->name('apps.update');
        Route::put('/settings/logo-apps/{id}', [AppsController::class, 'update_logo'])->name('logo-apps.update');
        Route::put('/settings/favicon-apps/{id}', [AppsController::class, 'update_favicon'])->name('favicon-apps.update');
    });
