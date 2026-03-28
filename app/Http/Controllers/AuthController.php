<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        // Validation
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        // Hash password
        $data['password'] = Hash::make($data['password']);

        // Create user
        $user = User::create($data);

        // Generate token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Response
        return response()->json([
            'status' => true,
            'message' => 'User registered successfully',
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function login(Request $request)
    {
        // Validation
        $data = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'min:6']
        ]);

        // Find user
        $user = User::where('email', $data['email'])->first();

        // Check password
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        // Generate token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Response
        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'user' => $user,
            'token' => $token
        ]);
    }
    public function logout(Request $request){
$request->user()->currentAccessToken()->delete();
        return response()->json([
            'status'=>true,
            'message'=>"logged out successfully"
        ]);
    }
}
