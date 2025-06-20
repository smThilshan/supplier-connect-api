<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function login(Request $request)
    {
        // Dummy credentials
        $validEmail = 'user@example.com';
        $validPassword = 'password123';

        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check credentials
        if (
            $request->email === $validEmail &&
            $request->password === $validPassword
        ) {
            return response()->json([
                'token' => 'test_token_12345'
            ], 200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
        
    //      return response()->json([
    //     'message' => 'Login function is working!'
    // ]);

    }
}
