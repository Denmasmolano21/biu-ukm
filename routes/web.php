<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentangkami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('contact');
});

// UKM Routes
Route::get('/ukm', [UkmController::class, 'index'])->name('ukm.index');
Route::get('/ukm/{slug}', [UkmController::class, 'show'])->name('ukm.show');

Route::get('/ukm/kategori/{slug}', [UkmController::class, 'index'])->name('ukm.kategori');

Route::get('/maintenance', function () {
    return response()->view('errors.maintenance', [], 503);
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});