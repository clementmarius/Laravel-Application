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

Route::get('/contact', function () {
    return view('pages/contact');
});

//exemple d'utilisation middleware

//Route::get('/terms', function () {
//    return view('pages/terms');
//})->middleware(isAdmin::class);


//Route CRUD
Route::get('dashboard/crud', function () {return view('dashboard/crud/showCrud');})->middleware(isAdmin::class);
Route::get('dashboard/crud/articles', function () {return view('dashboard/crud/articles');})->middleware(isAdmin::class);

//CRUD affichage users :
Route::get('dashboard/crud/users', [\App\Http\Controllers\UserCrudController::class, 'showUsers'])->middleware(isAdmin::class);
Route::get('dashboard/crud/users/{id}', [\App\Http\Controllers\UserCrudController::class, 'showUsersById'])->middleware(isAdmin::class);

//CRUD Edit Users
Route::get('dashboard/crud/users/{id}/edit/', [\App\Http\Controllers\UserCrudController::class, 'editUsers'])->middleware(isAdmin::class);


//Test Crud edit

//Route::put('dashboard/crud/users/{id}/edit/', [\App\Http\Controllers\UserCrudController::class, 'editUsersPost'])->middleware(isAdmin::class)->name('user.update');

//Route::group(['middleware' => ['auth', 'isAdmin']], function() {
//    Route::put('dashboard/crud/users/{id}/edit', [App\Http\Controllers\UserCrudController::class, 'editUsersPost'])->name('user.update');
//});

Route::put('dashboard/crud/users/{id}/edit', [App\Http\Controllers\UserCrudController::class, 'editUsersPost'])->middleware(IsAdmin::class)->name('user.update');

//Route::put('dashboard/crud/users/{id}/edit/',function() {dd("Hello from routes");})->middleware(isAdmin::class)->name('user.update');

//Test Crud Edit



//Piste delete btn
//Route::get('dashboard/account/profile', [ProfileController::class, 'destroy'])->middleware(isAdmin::class);


Route::get('/dashboard', function () {

    return view('dashboard/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Test CRUD DELETE
//    Route::group(['middleware' => ['auth']], function() {
//        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//    });


    Route::get('/dashboard/account', function () {return view('profile/account');});

    Route::get('/dashboard/account/email/edit', [ProfileController::class, 'editEmail'])->name('profile.editEmail');
    Route::patch('/dashboard/account/email/edit', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/dashboard/account/password/edit', [ProfileController::class, 'editPassword'])->name('profile.editPassword');
    Route::get('/dashboard/account/profile', [ProfileController::class, 'showProfile'])->name('profile.showProfile');
    Route::get('/dashboard/account/sessions', [ProfileController::class, 'showSession'])->name('profile.showSession');
});




require __DIR__.'/auth.php';
