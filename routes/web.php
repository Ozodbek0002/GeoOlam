<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\DownloadController;



// start
Route::get('/', function () {
    return view('user.main');
});


// user view
Route::get('/article_uz', [RouteController::class, 'article_uz'])->name('article_uz');
Route::get('/article_en', [RouteController::class, 'article_en'])->name('article_en');
Route::get('/article_ru', [RouteController::class, 'article_ru'])->name('article_ru');
Route::get('/slide_uz', [RouteController::class, 'slide_uz'])->name('slide_uz');
Route::get('/slide_ru', [RouteController::class, 'slide_ru'])->name('slide_ru');
Route::get('/slide_en', [RouteController::class, 'slide_en'])->name('slide_en');
Route::get('/get_book_lu', [RouteController::class, 'book_lu'])->name('book_lu');
Route::get('/get_book_en', [RouteController::class, 'book_en'])->name('book_en');
Route::get('/get_book_mo', [RouteController::class, 'book_mo'])->name('book_mo');
Route::get('/get_book_us', [RouteController::class, 'book_us'])->name('book_us');
Route::get('/cource_uz', [RouteController::class, 'cource_uz'])->name('cource_uz');
Route::get('/cource_ru', [RouteController::class, 'cource_ru'])->name('cource_ru');
Route::get('/cource_en', [RouteController::class, 'cource_en'])->name('cource_en');
Route::get('/informations', [RouteController::class, 'informations'])->name('informations');

Route::get('/contact', [RouteController::class, 'contact'])->name('contact');
Route::resource('contacts', ContactController::class)->name('index', 'contacts');

Route::get('downloadArticle/{file_name}', [DownloadController::class, 'downloadArticle'])->name('downloadArticle');
Route::get('downloadSlide/{file_name}', [DownloadController::class, 'downloadSlide'])->name('downloadSlide');
Route::get('downloadCource/{file_name}', [DownloadController::class, 'downloadCourse'])->name('downloadCource');
Route::get('downloadBook/{file_name}', [DownloadController::class, 'downloadBook'])->name('downloadBook');
Route::get('downloadInfore/{file_name}',[DownloadController::class, 'downloadInfore'])->name('downloadInfore');



//admin routes
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {

    Route::get('/', function () {
        return view('admin.master');
    })->name('index');

    Route::get('/users', [AdminController::class, 'index'])->name('users');
    Route::resource('articles', ArticleController::class)->name('index', 'articles');
    Route::resource('slides', SlideController::class)->name('index', 'slides');
    Route::resource('books', BookController::class)->name('index', 'books');
    Route::resource('course', CourseController::class)->name('index', 'course');
    Route::resource('information',InformationController::class)->name('index','information');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
