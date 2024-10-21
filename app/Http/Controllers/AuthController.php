<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Create a new user
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['success' => 'User created successfully']);
    }
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        // $request->session()->start();
    
        // Check if the user exists
        $user = User::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            // Store user information in session
            Session::put('user_id', $user->id);
            Session::put('user_email', $user->email);
            // Optionally, you can also store other user details
            Session::put('user_name', $user->name);
            Session::save();
    
            // Generate token if needed or start session (optional)
            return response()->json(['status' => 'success', 'message' => 'Login successful']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid email or password'], 401);
        }
    }
    public function logout(Request $request)
    {
        // Clear the session
        Session::flush();
    
        return response()->json(['status' => 'success', 'message' => 'Logged out successfully']);
    }
}
