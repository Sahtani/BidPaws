<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function toggleAccess(User $user)
    { 
        try {
            $user->access = !$user->access;
            $user->update();
           
            return redirect()->back()->with('success', 'Access toggled successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to toggle access.');
        }
    }

    public function users()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.users', compact('users'));
    }

    public function annoces()
    {
        $events = Annonce::all();
        return view('admin.events', compact('events'));
    }

    public function validateAnnoces(Annonce $annoce)
    {
        if ($annoce->status === 'accepted') {
            $annoce->status = 'refused';
        } else {
            $annoce->status = 'accepted';
        }

        $annoce->save();
        return back()->with('success', 'Annoce confirmed successfully.');
    }
}
