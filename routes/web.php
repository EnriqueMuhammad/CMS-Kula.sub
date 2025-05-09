<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/articles/{article}', [FrontendController::class, 'show'])->name('article.show');
Route::get('/categories/{category}', [FrontendController::class, 'category'])->name('category');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::post('/contact', [FrontendController::class, 'submitContact'])->name('contact.submit');