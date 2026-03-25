<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
/* 
Route::get('/ui', function () {
    return view('ui');
});

Route::view('/buttons', 'pages.buttons')->name('buttons');
Route::view('/forms', 'pages.forms')->name('forms');
Route::view('/cards', 'pages.cards')->name('cards');
Route::view('/alerts', 'pages.alerts')->name('alerts');
Route::view('/modals', 'pages.modals');
Route::view('/dropdowns', 'pages.dropdowns');
Route::view('/tables', 'pages.tables');
Route::view('/pagination', 'pages.pagination');
Route::view('/tabs', 'pages.tabs');
Route::view('/accordion', 'pages.accordion');
Route::view('/toasts', 'pages.toasts'); */




// Dashboard
/* Route::get('/', function () {
    return view('pages.dashboard'); // resources/views/pages/dashboard.blade.php
})->name('dashboard'); */

Route::get('/', function () {
    return view('dashboard');
});


/* Route::get('/buttons', function () {
    return view('pages.button');
});

// Pages
Route::get('/forms', function () {
    return view('pages.forms'); // resources/views/pages/forms.blade.php
})->name('forms');

Route::get('/tables', function () {
    return view('pages.tables'); // resources/views/pages/tables.blade.php
})->name('tables');

Route::get('/charts', function () {
    return view('pages.charts'); // resources/views/pages/charts.blade.php
})->name('charts');

Route::get('/typography', function () {
    return view('pages.typography'); // resources/views/pages/typography.blade.php
})->name('typography');

// Auth Pages (SignIn / SignUp)
Route::get('/signin', function () {
    return view('pages.signin'); // resources/views/pages/signin.blade.php
})->name('signin');

Route::get('/signup', function () {
    return view('pages.signup'); // resources/views/pages/signup.blade.php
})->name('signup');
 */