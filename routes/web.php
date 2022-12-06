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



// start
Route::get('/', function () {
    return view('user.main');
});

// user
Route::get('/article_uz', [RouteController::class, 'article_uz'])->name('article');
Route::get('/article_us', [RouteController::class, 'article_us'])->name('article');
Route::get('/article_ru', [RouteController::class, 'article_ru'])->name('article');
Route::get('/slide', [RouteController::class, 'slide'])->name('slide');
Route::get('/book', [RouteController::class, 'book'])->name('book');
Route::get('/cource', [RouteController::class, 'cource'])->name('cource');
Route::get('/contact', [RouteController::class, 'contact'])->name('contact');


//admin routes
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {

    Route::get('/', function () {   return view('admin.master');   })->name('index');
    Route::get('/users', [AdminController::class, 'index'])->name('users');

    Route::resource('articles', ArticleController::class)->name('index', 'articles');
    Route::resource('slides', SlideController::class)->name('index', 'slides');
    Route::resource('books', BookController::class)->name('index', 'books');
    Route::resource('cources', CourseController::class)->name('index', 'cources');
    Route::resource('contacts', ContactController::class)->name('index', 'contacts');


});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
