<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('home');
//});

// Static Pages
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Blog Routes
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
    Route::get('/tag/{slug}', [BlogController::class, 'tag'])->name('blog.tag');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

// Authentication
Route::get('/login', [LoginController::class, 'showLoginModal'])->name('login.show');
Route::get('/login/{country}', [LoginController::class, 'redirectToCountryLogin'])
    ->name('login.country')
    ->where('country', 'ghana|tanzania');

// Language Switch
Route::get('lang/{lang}', [PagesController::class, 'switchLang'])->name('lang.switch');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/image/{id}', [GalleryController::class, 'show'])->name('gallery.show');
Route::get('/gallery/category/{categorySlug}', [GalleryController::class, 'byCategory'])->name('gallery.byCategory');
Route::get('/gallery/tag/{tagSlug}', [GalleryController::class, 'byTag'])->name('gallery.byTag');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/thank-you', [App\Http\Controllers\ContactController::class, 'thankYou'])->name('contact.thank-you');