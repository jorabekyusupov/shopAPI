<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginValidation;
use App\Http\Requests\Api\RegisterValidation;
use App\Models\User;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function register(RegisterValidation $request)
    {
       $data = $request->validated();
       $data['password'] = bcrypt($data['password']);
       $user = User::create($data);
       $user->assignRole('admin');
       $token = $user->createToken('authToken')->accessToken;
       return response()->json(['user' => $token]);
    }
    public function login(LoginValidation $request)
    {
        $data = $request->validated();
        if (!auth()->attempt($data)) {
            return response()->json('login or password error');
        }
        $token = auth()->user()->createToken('authToken')->accessToken;
        return response()->json(['user' => $token]);
    }
}
