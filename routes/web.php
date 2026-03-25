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

Route::get('/dashboardv1', function () {
    return view('dashboard');
});

Route::get('/dashboardv2', function () {
    return view('dashboardv2');
});

Route::get('/dashboardv3', function () {
    return view('dashboardv3');
});

Route::get('/generate/theme', function () {
    return view('generate.theme');
})->name('generate.theme');

Route::get('/widgets/small-box', function () {
    return view('widgets.small-box');
})->name('widgets.small-box');

Route::get('/widgets/info-box', function () {
    return view('widgets.info-box');
})->name('widgets.info-box');

Route::get('/widgets/cards', function () {
    return view('widgets.cards');
})->name('widgets.cards');

Route::get('/layout/unfixed-sidebar', function () {
    return view('layout.unfixed-sidebar');
})->name('layout.unfixed-sidebar');

Route::get('/layout/fixed-sidebar', function () {
    return view('layout.fixed-sidebar');
})->name('layout.fixed-sidebar');

Route::get('/layout/fixed-footer', function () {
    return view('layout.fixed-footer');
})->name('layout.fixed-footer');

Route::get('/layout/fixed-complete', function () {
    return view('layout.fixed-complete');
})->name('layout.fixed-complete');

Route::get('/layout/layout-custom-area', function () {
    return view('layout.layout-custom-area');
})->name('layout.layout-custom-area');

Route::get('/layout/layout-sidebar-mini', function () {
    return view('layout.sidebar-mini');
})->name('layout.sidebar-mini');

Route::get('/layout/collapsed-sidebar', function () {
    return view('layout.collapsed-sidebar');
})->name('layout.collapsed-sidebar');

Route::get('/UI/general', function () {
    return view('UI.general');
})->name('UI.general');

Route::get('/UI/icons', function () {
    return view('UI.icons');
})->name('UI.icons');

Route::get('/UI/timeline', function () {
    return view('UI.timeline');
})->name('UI.timeline');

Route::get('/forms/general', function () {
    return view('forms.general');
})->name('forms.general');


Route::get('/tables/simple', function () {
    return view('tables.simple');
})->name('tables.simple');

Route::get('/examples/login', function () {
    return view('examples.login');
})->name('examples.login');

Route::get('/examples/register', function () {
    return view('examples.register');
})->name('examples.register');

Route::get('/examples/login-v2', function () {
    return view('examples.login-v2');
})->name('examples.login-v2');    

Route::get('/examples/register-v2', function () {
    return view('examples.register-v2');
})->name('examples.register-v2'); 

Route::get('/examples/lockscreen', function () {
    return view('examples.lockscreen');
})->name('examples.lockscreen'); 

Route::get('/docs/introduction', function () {
    return view('docs.introduction');
})->name('docs.introduction'); 

Route::get('/docs/layout', function () {
    return view('docs.layout');
})->name('docs.layout'); 

Route::get('/docs/color-mode', function () {
    return view('docs.color-mode');
})->name('docs.color-mode'); 

Route::get('/docs/color-mode', function () {
    return view('docs.color-mode');
})->name('docs.color-mode'); 

Route::get('/docs/components.main-header', function () {
    return view('docs.components.main-header');
})->name('docs.components.main-header'); 

Route::get('/docs/components.main-sidebar', function () {
    return view('docs.components.main-sidebar');
})->name('docs.components.main-sidebar'); 

Route::get('/docs/javascript.treeview', function () {
    return view('docs.javascript.treeview');
})->name('docs.javascript.treeview'); 

Route::get('/docs/browser-support', function () {
    return view('docs.browser-support');
})->name('docs.browser-support'); 




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