<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRegisterRequest;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  Request $request
     * @param  UserRegisterRequest $request
     * @return \App\Models\User
     * @return $accessToken
     */
    protected function register(UserRegisterRequest $request)
    {
        // $input = $request->input();
        // $data = Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
        // if ($data->fails()) {
        //     return response()->json(['success' => false, 'error' => $data->messages()]);
        // }
        $input = $request->validated();
        $user = User::create([
          'name' => $input['name'],
          'email' => $input['email'],
          'password' => Hash::make($input['password']),
        ]);

        $accessToken = $user->createToken('accessToken')->accessToken;

        return response(['user' => $user, 'accessToken' => $accessToken]);
    }
}
