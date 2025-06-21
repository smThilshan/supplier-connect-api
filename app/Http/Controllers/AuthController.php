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
                'message' => 'Login successful',
                'token' => 'test_token_12345',
                // 'userid' => 1
                'user' => [
        'id' => 1, // Whatever user id you have
        'email' => $request->email,
        
    ]
              
            ], 200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);

    }
}
