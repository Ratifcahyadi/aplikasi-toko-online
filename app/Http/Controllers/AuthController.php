<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $credentials = request(['email', 'password']);
        // dd($credentials);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['Email atau Password salah!'], 401);
        }

        return 
        $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
