<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Admin\ReportController;
use App\Http\Controllers\Dashboard\Admin\ProfileController;
use App\Http\Controllers\Dashboard\Admin\DashboardController;
use App\Http\Controllers\Dashboard\Admin\NewsletterController;

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('report/index', [ReportController::class, 'index'])->name('report.index');
    Route::get('report/physical', [ReportController::class, 'physical'])->name('report.physical');
    Route::get('report/emotional', [ReportController::class, 'emotional'])->name('report.emotional');
    Route::get('report/sexual', [ReportController::class, 'sexual'])->name('report.sexual');
    Route::get('report/neglect', [ReportController::class, 'neglect'])->name('report.neglect');
    Route::get('report/others', [ReportController::class, 'others'])->name('report.others');
    Route::get('report/action/{uuid}', [ReportController::class, 'action'])->name('report.action');
    Route::post('report/reply/{uuid}', [ReportController::class, 'reply'])->name('report.reply');
    Route::get('report/show/{uuid}', [ReportController::class, 'show'])->name('report.show');
    Route::get('report/edit/{uuid}', [ReportController::class, 'edit'])->name('report.edit');
    Route::post('report/update/{uuid}', [ReportController::class, 'update'])->name('report.update');
    Route::get('report/delete/{uuid}', [ReportController::class, 'delete'])->name('report.delete');

    Route::get('newsletter/index', [NewsletterController::class, 'index'])->name('newsletter.index');
    Route::post('newsletter/send/email', [NewsletterController::class, 'sendEmail'])->name('newsletter.send.email');
    Route::get('newsletter/delete/{uuid}', [NewsletterController::class, 'delete'])->name('newsletter.delete');
});
