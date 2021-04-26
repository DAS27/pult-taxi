<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class   AuthController extends Controller
{
    public function signup(UserSignUpRequest $request)
    {
        $validatedData = $request->validated();
        $user          = User::create([
            'name'     => $validatedData['name'],
            'login'    => $validatedData['login'],
            'password' => bcrypt($validatedData['password']),
        ]);
        $token      =  $user->createToken('PultTaxiToken')->plainTextToken;
        $response   = [
            'user'  => $user,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function signin(Request $request)
    {
        $validatedData = $request->validate([
            'login'    => 'required',
            'password' => 'required'
        ]);

        // Check login
        $user = User::where('login', $validatedData['login'])->first();

        // Check password
        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            return response([
               'message' => 'Bad creds'
            ], 401);
        }

        $token      =  $user->createToken('PultTaxiToken')->plainTextToken;
        $response   = [
            'user'  => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(UserSignUpRequest $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
