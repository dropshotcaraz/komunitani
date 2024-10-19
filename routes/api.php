<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');
Route::post('/post/store', [HomepageController::class, 'store'])->name('post.store');
Route::get('/topics/{id}', function ($id) {
    return "Displaying topic with ID: $id";
})->name('topic.show');