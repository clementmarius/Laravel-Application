<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
});


Route::get('/FAQ', function () {
    return view('pages/faq');
});
