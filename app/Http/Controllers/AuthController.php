<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max: 255',
            'username' => 'required|string|max: 255|unique:users',
            'password' => 'required|string|min: 2'
        ]);

        $user = User::create([
            'id' => Str::uuid(),
            'name' => $request -> name,
            'username' => $request -> username,
            'password' => Hash::make($request -> password),
        ]);

        // dd($user);
        Auth::login($user);
        return redirect()->route('home')->with('status', $user);
    }

    public function login(Request $request) {
        $credentials = $request -> validate([
            'username' => 'required|string|max: 255',
            'password' => 'required|string|min: 2'
        ]);

        $remember = $request -> has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request -> session() -> regenerate();
            return redirect()->route('register')->with('user', value: Auth::user());
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
            'password' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('status', 'You have been logged out.');
    }
}
