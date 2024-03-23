<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{ public function showRegistrationForm()
    {
        return view('user.Auth');
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
            'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('success', 'Registration successful!');
    

    }
}
