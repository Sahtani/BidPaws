<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.signup-form');
    }
    public function showloginForm()
    {
        if (Auth::check()) {
            return redirect()->back();
        } else {
            return view('auth.login-form');
        }
    }
    public function register(AuthRequest $request)
    {
        $fields = $request->validated();
        $image = explode('/', $fields['image']->store('public/usersImages'));
        $user = User::create([
            'name' => $fields['name'],
            'username' => $fields['username'],
            'image' => $image[2],
            'email' => $fields['email'],
            'number_phone' => $fields['number_phone'],
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('user.profile')->with('success', 'Registration successful!');
    }
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email|',
            'password' => 'required|string|min:8'
        ]);

        $user = User::where('email', $fields['email'])->first();
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return redirect()->back()->withErrors(['email' => 'Incorrect credentials.'])->withInput();
        }

        Auth::login($user);

        if ($user->isAdmin()) {
            return redirect()->route('admin.stats');
        } elseif ($user->isUser()) {
           
            return redirect()->route('user.profile');
        }

        return  redirect()->route('home');
    }

    public function logout()
    {  
        Session::flush();
        Auth::logout();
        return redirect()->route('home')->with('success', 'You have been logged out.');
    }
}
