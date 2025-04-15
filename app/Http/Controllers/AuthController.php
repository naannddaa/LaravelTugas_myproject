<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Cek apakah user ada
        $user = User::where('email', $request->email)->first();

        // Validasi password
        // if (!$user || !Hash::check($request->password, $user->password)) {
        //     return response()->json(['message' => 'Invalid credentials'], 401);
        // }

        // Buat token untuk user
        $token = $user->createToken('auth_token')->plainTextToken;

        // Return response dengan token
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }
    public function logout(Request $request)
{
    $user = Auth::user(); // Ambil user yang sedang login

    if ($user) {
        $user->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']);
    }

    return response()->json(['error' => 'Unauthorized'], 401);
}
}
