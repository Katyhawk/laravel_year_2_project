<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;

Route::get('/welcome', function () {
    return redirect()->route('/index');
});

Route::get('/index', [PageController::class, 'show'])->name('index');
Route::get('/contact', [PageController::class, 'showcontact'])->name('contact');
Route::get('/booking', [PageController::class, 'showBooking'])->name('booking');
Route::get('/homepage', [PageController::class, 'showHomePage'])->name('homepage');
Route::get('/escaperooms', [PageController::class, 'showEscaperooms'])->name('escaperooms');
