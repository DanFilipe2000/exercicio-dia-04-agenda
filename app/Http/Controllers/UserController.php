<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Login functions:

    public function loginView() {
        return view('user.login');
    }

    public function loginPost(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($credentials)) {
            return redirect('/');
        }

        return back();
    }

    // Register Functions:

    public function registerView() {
        return view('user.register');
    }

    public function registerPost(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login');
    }
}
