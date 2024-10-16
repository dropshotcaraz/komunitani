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