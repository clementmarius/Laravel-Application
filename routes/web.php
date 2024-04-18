<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
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

//exemple d'utilisation middleware

//Route::get('/terms', function () {
//    return view('pages/terms');
//})->middleware(isAdmin::class);


//Route CRUD
Route::get('dashboard/crud', function () {return view('dashboard/crud/showCrud');})->middleware(isAdmin::class);
Route::get('dashboard/crud/articles', function () {return view('dashboard/crud/articles');})->middleware(isAdmin::class);
Route::get('dashboard/crud/users', function () {return view('dashboard/crud/users');})->middleware(isAdmin::class);

Route::get('/dashboard', function () {

    return view('dashboard/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/account', function () {return view('profile/account');});

    Route::get('/dashboard/account/email/edit', [ProfileController::class, 'editEmail'])->name('profile.editEmail');
    Route::patch('/dashboard/account/email/edit', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/dashboard/account/password/edit', [ProfileController::class, 'editPassword'])->name('profile.editPassword');
    Route::get('/dashboard/account/profile', [ProfileController::class, 'showProfile'])->name('profile.showProfile');
    Route::get('/dashboard/account/sessions', [ProfileController::class, 'showSession'])->name('profile.showSession');
});




require __DIR__.'/auth.php';
