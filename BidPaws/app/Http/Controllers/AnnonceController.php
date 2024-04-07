<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnonceRequest;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $annonces = Annonce::with('images')->paginate(10); // 10 annonces par page, vous pouvez ajuster cela selon vos besoins

        return view('allannonces', compact('annonces'));
    }

    public function recentAnnouncements()
    {

        $annonces = Annonce::with('images')->latest()->get();

        return view('home', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnonceRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Get the authenticated user
        $user = User::find(Auth::user()->id);

        // Create a new annonce with the validated data
        $annonce = $user->annonces()->create($validatedData);

        // Check if images are provided in the request
        if ($request->hasFile('images')) {
            // Process and store each image
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('public/images');

                $annonce->images()->create(['image_path' => $imagePath[2]]);
            }
        }

        // Redirect with success message
        return redirect()->route('user.my-listings')->with('success', 'Annonce créée avec succès.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function myListings()
    {
        $user_id = Auth::user()->id;
        $mylistings = Annonce::where('user_id', $user_id)->with('images')->get();
        return view('user.user-annonces', compact('mylistings'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
