<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password

        ];

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'email or password if incorrect',
                'user' => null
            ]);
        }

        $user = $request->user();
        $token = $user->createToken('api db testing token')->accessToken;

        return response()->json([
            'success' => true,
            'messsage' => 'success',
            'user' => Auth::user(),
            'token' => $token
        ]);
    }

public function register(Request $request) {
    $data = User::create($request->only('name', 'email') + [
        'password' => Hash::make($request->password)
    ]);
    return response()->json([
        'success' => true,
        'message' => 'success',
        'data' => $data

    ], 200);

}
}
