<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserLoginRequest;

class LoginController extends Controller
{
    public function login(UserLoginRequest $request)
    {
        // $login = $request->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string',
        // ]);

        $login = $request->input();
        // $login = $request->validated();

        // if (!$login) {
        //   return response()->setStatusCode(201);
        // }

        // if( !Auth::guard( $login ) ) {
        if( !Auth::attempt( $login ) ) {
            return response(['message' => 'Invalid login creadentials']);
        }

        $accessToken = Auth::user()->createToken('accessToken')->accessToken;

        return response(['user' => Auth::user(), 'accessToken' => $accessToken]);

    }

    public function logout(UserLoginRequest $request)
    {
      return response(['message' => 'User logout operation']);
    }
}
