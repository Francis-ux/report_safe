<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', HomeController::class)->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/report/abuse', [PageController::class, 'reportAbuse'])->name('report.abuse');

require_once __DIR__ . '/auth.php';
