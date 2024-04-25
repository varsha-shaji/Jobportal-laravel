<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        // Attempt to authenticate user
        if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            session(['user_name' => auth()->user()->name]);

            // Check if the authenticated user is an admin
            if (auth()->user()->name === "Admin") {
                return redirect('/adminHome');
            }

            return redirect('/');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'password' => ['required'],
            'experience' => ['required'],
            'qualification' => ['required']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/loginpage');
    }
}
