<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function toggleAccess(User $user)
    {
        $user->update(['access' => !$user->access]);
        return redirect()->back()->with('success', 'Access toggled successfully.');
    }
}
