<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/School-Profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/Contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/Cost-of-Education', function () {
    return view('pages.CostEducation');
})->name('cost-of-education');

Route::get('/Academic-Programs', function () {
    return view('pages.AcademicPrograms');
})->name('AcademicPrograms');

Route::get('/Process&Recruitment', function () {
    return view('pages.ProcessRecruitment');
})->name('ProcessRecruitment');
