<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', function () {
    return view('index');
})->name('blog.index');

Route::get('/contact', function () {
    return view('contact');
})->name('blog.contact');

Route::get('/about-us', function () {
    return view('about-us');
})->name('blog.about-us');

Route::get('/archive-blog', function () {
    return view('archive-blog');
})->name('blog.archive-blog');

Route::get('/single-post', function () {
    return view('single-post');
})->name('blog.single-post');