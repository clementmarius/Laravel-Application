<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
});


Route::get('/FAQ', function () {
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
