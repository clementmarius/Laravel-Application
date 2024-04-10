<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
});


Route::get('/faq', function () {
    return view('pages/faq');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/pricing', function () {
    return view('pages/pricing');
});

Route::get('/terms', function () {
    return view('pages/terms');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/account/email/edit', [ProfileController::class, 'editEmail'])->name('profile.editEmail');
    Route::get('/dashboard/account/profile', [ProfileController::class, 'showProfile'])->name('profile.showProfile');

});


require __DIR__.'/auth.php';
