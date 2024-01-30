<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class UserController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => "admin",
        ]);

        auth()->login($user);
        return redirect()->route('home');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->route("home");
        }

        return redirect()->route("login")->withErrors(['username' => 'Invalid Credentials!'])->withInput();
    }

    public function showLogin()
    {
        return view("authentication.login");
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route("home");
    }
}
