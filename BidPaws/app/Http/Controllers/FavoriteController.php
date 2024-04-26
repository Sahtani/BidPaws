<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{


    public function displayFavorites()
    {
        $user = auth()->user();

        $favorites = $user->favorites;

        return view('favorites.index', ['favorites' => $favorites]);
    }
    public function addToFavorites(Request $request, $id)
    {
       
        $user = auth()->user();

        $annonce = Annonce::findOrFail($id);

        $isFavorite = $user->favorites()->where('annonce_id', $id)->exists();

        if ($isFavorite) {
            // Supprimer l'annonce des favoris de l'utilisateur
            $user->favorites()->where('annonce_id', $annonce->id)->delete();
            
            // Redirection avec un message
            return redirect()->back()->with('success', 'The announcement has been removed from your favorites.');
        }

        $favorite = new Favorite();
        $favorite->user_id = $user->id;
        $favorite->annonce_id = $annonce->id;
        $favorite->save();

        return redirect()->back()->with('success', 'The announcement has been added to your favorites.');
   
    }
}
