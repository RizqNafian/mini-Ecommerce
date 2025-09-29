<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('user/login');
    }

    public function postlogin(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('/');
        }
        return redirect('/login');
    }

    public function register()
    {
        return view('user/register');
    }

    public function postregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);
        return redirect('/login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
