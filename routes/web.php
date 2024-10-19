<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
// use App\Http\Controllers\MessagesController;
// use App\Http\Controllers\SearchController;
// use App\Http\Controllers\ChatbotController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\ProfileController;


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

// routes/web.php

// Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
// Route::get('/search', [SearchController::class, 'index'])->name('search');
// Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot');
// Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route::get('/topics/{id}', function ($id) {
//     return "Displaying topic with ID: $id";
// })->name('topic.show');


