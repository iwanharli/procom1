<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\Portal\AboutController;
use App\Http\Controllers\Portal\BlogController;
use App\Http\Controllers\Portal\CareersController;
use App\Http\Controllers\Portal\FaqsController;
use App\Http\Controllers\Portal\IntegrationController;
use App\Http\Controllers\Portal\PortofolioController;
use App\Http\Controllers\Portal\ServicesController;


use App\Http\Controllers\Portal\NewsController;
use App\Http\Controllers\Portal\StatisticController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/foo', function () {
	$targetFolder = base_path() . '/storage/app/public';
	$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
	symlink($targetFolder, $linkFolder);
});

Route::get('/clear-cache', function () {
	Artisan::call('route:cache');
});

//Images
Route::get('/images/{slug}', [HomeController::class, 'detail_images'])->name('images-detail');

//Category
Route::get('/category/{category:slug}', [HomeController::class, 'homeCategory'])->name('home-category');
Route::get('/images', [HomeController::class, 'images'])->name('images');

//Tag
Route::get('/tag/{category:slug}', [HomeController::class, 'homeTag'])->name('home-tag');

//Author
Route::get('/author/{id}', [HomeController::class, 'author'])->name('author');

//Search
Route::get('/autocomplete', [HomeController::class, 'autocomplete'])->name('autocomplete');
Route::get('/search', [HomeController::class, 'searchArticle'])->name('search-article');

// Authentication
Route::get('/arboc', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/arboc', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// Route::get('/', function () {
//     return view('pages.portal.index');
// });

Route::prefix('/')
    ->namespace('Portal')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [AboutController::class, 'index'])->name('about');
        
        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog/{date}/{slug}', [BlogController::class, 'blogDetail'])->name('blog.detail');

        Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
        Route::get('/portofolio/{slug}', [PortofolioController::class, 'portofolioDetail'])->name('portofolio.detail');

        Route::get('/services', [ServicesController::class, 'index'])->name('services');
        Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');

        Route::get('/careers', [CareersController::class, 'index'])->name('careers');
        Route::get('/careers/{code}', [CareersController::class, 'careerDetail'])->name('careers.detail');

        Route::get('/integration', [IntegrationController::class, 'index'])->name('integration');
    });



// ADMIN DASHBOARD 
require __DIR__ . '/_admin.php';
