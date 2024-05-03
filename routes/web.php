<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

//Static pages

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

Route::get('/contact', function () {
    return view('pages/contact');
});


//Route CRUD
Route::get('dashboard/crud', function () {return view('dashboard/crud/showCrud');})->middleware(isAdmin::class);
Route::get('dashboard/crud/articles', function () {return view('dashboard/crud/articles');})->middleware(isAdmin::class);
Route::resource('user', \App\Http\Controllers\UserCrudController::class);

//CRUD affichage users :
Route::get('dashboard/crud/users', [\App\Http\Controllers\UserCrudController::class, 'showUsers'])->middleware(isAdmin::class);
Route::get('dashboard/crud/users/{id}', [\App\Http\Controllers\UserCrudController::class, 'showUsersById'])->middleware(isAdmin::class);

//CRUD Search Bare
Route::post('dashboard/crud/users', [\App\Http\Controllers\UserCrudController::class, 'searchUsers'])->middleware(isAdmin::class)->name('user.search');


//CRUD Edit Users
Route::get('dashboard/crud/users/{id}/edit/', [\App\Http\Controllers\UserCrudController::class, 'editUsers'])->middleware(isAdmin::class);

Route::put('dashboard/crud/users/{id}/edit', [App\Http\Controllers\UserCrudController::class, 'editUsersPost'])->middleware(IsAdmin::class)->name('user.update');



Route::get('/dashboard', function () {

    return view('dashboard/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route Account


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::resource('/profile', ProfileController::class,'profile.destroy');
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);

//Piste delete btn
//    Route::get('dashboard/account/profile', [ProfileController::class, 'destroy'])->middleware(isAdmin::class);


    Route::get('/dashboard/account', function () {return view('profile/account');});

    Route::get('/dashboard/account/email/edit', [ProfileController::class, 'editEmail'])->name('profile.editEmail');
    Route::patch('/dashboard/account/email/edit', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/dashboard/account/password/edit', [ProfileController::class, 'editPassword'])->name('profile.editPassword');
    Route::get('/dashboard/account/profile', [ProfileController::class, 'showProfile'])->name('profile.showProfile');
    Route::get('/dashboard/account/sessions', [ProfileController::class, 'showSession'])->name('profile.showSession');
});





require __DIR__.'/auth.php';
