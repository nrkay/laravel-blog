<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('front-end.pages.home');
});

Route::get('/about', function () {
    return view('front-end.pages.about');
});

Route::get('/contact-us', function () {
    return view('front-end.pages.contact');
});

Route::get('/activity', function () {
    return view('front-end.pages.activity');
});
