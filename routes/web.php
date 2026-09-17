<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/school-profile', function () {
    return view('pages.profile');
})->name('profile');

