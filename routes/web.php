<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/login', function () {
    return view('sign.in');
});

Route::match(['get', 'post'], '/signup', function () {
    return view('sign.up');
});

Route::match(['get', 'post'], '/reset', function () {
    return view('sign.reset');
});

Route::match(['get', 'post'], '/homepage', function () {
    return view('homepage');
});

Route::match(['get', 'post'], '/search', function () {
    return view('search');
});