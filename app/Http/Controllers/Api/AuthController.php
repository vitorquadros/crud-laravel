<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;

class AuthController extends Controller
{
    public function login(Request $request) {
        try {
            $request->validate([
                'email' => 'required | email | exists:users',
                'password' => 'required | string'
            ]);

            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw new Exception('Email ou senha incorretos!');
            }
            $ability = $user->is_admin ? ['is-admin'] : [];
            $response = $user->createToken($request->email, $ability)->plainTextToken;
            return response()->json(['token' => $response], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
