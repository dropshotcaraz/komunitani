<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/signup', [AuthController::class, 'signup']);

// Route::post('/login', function (Request $request)  {
//     $response = User::where('email', $request->input('email'))
//                 ->where('password', Hash:($request->input('password')))->count();
//     if ($response > 0) {
//         return response()->json(['success' => 'Login successful']);
//     } else {
//         return response()->json(['error' => 'Login failed']);
//     }
// });