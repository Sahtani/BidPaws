<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{


    public function displayFavorites()
    {
        $user = auth()->user();

        $favorites = $user->favorites;

        return view('favorites.index', ['favorites' => $favorites]);
    }
    public function addToFavorites(Request $request, $annonce_id)
    {
        $user = $request->user();

        $favorite = Favorite::where('user_id', $user->id)
            ->where('annonce_id', $annonce_id)
            ->first();

        if ($favorite) {
            $favorite->delete();
            return back()->with('success', 'Annonce retirée des favoris avec succès');
        } else {
            $newFavorite = new Favorite();
            $newFavorite->user_id = $user->id;
            $newFavorite->annonce_id = $annonce_id;
            $newFavorite->save();
        }
    }
}
