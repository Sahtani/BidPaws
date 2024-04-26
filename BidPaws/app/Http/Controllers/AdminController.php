<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function getUser()
    {
        return Auth::user(); 
    }
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
        $user = $this->getUser();
        $totalUsers = User::where('role','user')->count();
        return view('admin.users', compact('users','user','totalUsers'));
    }

    public function annonces()
    { $user = $this->getUser();
        $annonces = Annonce::with('category','images')->get();
        return view('admin.annonces', compact('annonces','user'));
    }

    public function acceptAnnoces(Annonce $annonce)
    {
        $annonce->status = 'confirmed';
        $annonce->save();
        return back()->with('success', 'Annonce accepted successfully.');
    }

    public function rejectAnnoces(Request $request, Annonce $annonce)
    {
        $annonce->update($request->only('status'));
        return back()->with('success', 'Annonce rejected successfully.');
    }
    

    public function stats()
    { 
        $user = $this->getUser();

        $totalUsers = User::where('role','user')->count();
        $userBand = User::where('access','1')->count();

        $totalAnnonces = Annonce::count();

        $categories=Category::count();

        $annoncesByCategory = Annonce::select('category_id', DB::raw('count(*) as total'))->groupBy('category_id')->get();


        $annoncesByUser = User::withCount('annonces')->orderByDesc('annonces_count')->get();

        $stats = [
            'totalUsers' => $totalUsers,
            'totalAnnonces' => $totalAnnonces,
            'annoncesByCategory' => $annoncesByCategory,
            'annoncesByUser' => $annoncesByUser,
            'user'=>$user,
            'categories'=>$categories,
            'userBand'=>$userBand
        ];

        // return $stats;
        return view('admin.stats', compact('stats'));

    }
}
