<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function acceptAnnoces(Annonce $annoce)
    {
        $annoce->status = 'accepted';
        $annoce->save();
        return back()->with('success', 'Annoce accepted successfully.');
    }

    public function rejectAnnoces(Annonce $annoce)
    {
        $annoce->status = 'refused';
        $annoce->save();
        return back()->with('success', 'Annoce rejected successfully.');
    }

    public function stats()
    {
        // Nombre total d'utilisateurs
        $totalUsers = User::count();

        // Nombre total d'annonces
        $totalAnnonces = Annonce::count();

        // Répartition des annonces par catégorie
        $annoncesByCategory = Annonce::select('category_id', DB::raw('count(*) as total'))->groupBy('category_id')->get();

        // Utilisateurs actifs au cours des dernières 24 heures
        $activeUsersLast24Hours = User::where('last_login_at', '>', now()->subHours(24))->count();

        // Nombre d'annonces publiées par utilisateur
        $annoncesByUser = User::withCount('annonces')->orderByDesc('annonces_count')->get();

        // Créer un tableau associatif contenant toutes les statistiques collectées
        $stats = [
            'totalUsers' => $totalUsers,
            'totalAnnonces' => $totalAnnonces,
            'annoncesByCategory' => $annoncesByCategory,
            'activeUsersLast24Hours' => $activeUsersLast24Hours,
            'annoncesByUser' => $annoncesByUser,
        ];

        return $stats;
    }
}
