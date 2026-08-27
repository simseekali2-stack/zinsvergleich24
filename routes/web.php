<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/news', [SiteController::class, 'news'])->name('news.index');
Route::get('/news/{slug}', [SiteController::class, 'newsShow'])->name('news.show');

Route::get('/impressum', [SiteController::class, 'impressum'])->name('impressum');
Route::get('/datenschutz', [SiteController::class, 'datenschutz'])->name('datenschutz');
Route::get('/kontakt', [SiteController::class, 'kontakt'])->name('kontakt');
Route::post('/kontakt', [SiteController::class, 'kontaktSubmit'])->name('kontakt.submit');
