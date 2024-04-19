<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function addToFavorites(Request $request, $annonce_id)
    {
        $user = $request->user();
        $favorite = Favorite::firstOrNew([
            'user_id' => $user->id,
            'annonce_id' => $annonce_id,
        ]);

        if (!$favorite->exists) {
            $favorite->save();
            return back()->with('success', 'Annonce ajoutée aux favoris avec succès');
        }

        return back()->with('error', 'Annonce déjà présente dans les favoris');
    }
}
