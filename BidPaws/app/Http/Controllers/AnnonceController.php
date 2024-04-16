<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnonceRequest;
use App\Models\Annonce;
use App\Models\AnnonceImage;
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
        $user->role='user';
        // Create a new annonce with the validated data
        $annonce = $user->annonces()->create($validatedData);

        // Check if images are provided in the request
        if ($request->hasFile('images')) {
            // Process and store each image
            foreach ($request->file('images') as $image) {
                $image = $image->store('public/annonceImages');
                $imagePath = explode("/", $image);
                // $annonceImages=AnnonceImage::create(['image_path' => $imagePath[2], 'annonce_id' => $annonce->id]);
                $annonce->images()->create(['image_path' => $imagePath[2]]);
            }
        }
        // Redirect with success message
        return redirect()->route('user.my-listings')->with('success', 'Annonce créée avec succès.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        
        // Incrémenter les vues chaque fois que l'annonce est vue
        $annonce->increment('views');
    
        return view('annonce.show', compact('annonce'));
    }
    public function myListings()
    {
        $user_id = Auth::user()->id;
        $annonces = Annonce::where('user_id', $user_id)->with('images')->get();
        return view('user.user-annonces', compact('annonces'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Récupérer l'annonce à éditer avec sa catégorie et ses images
        $annonce = Annonce::with('category', 'images')->findOrFail($id);
    
        // Afficher le formulaire d'édition avec les données de l'annonce
        return view('annonces.edit', compact('annonce'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valider les données entrantes
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'age' => 'required|integer',
            'image' => 'nullable|json',
            'status' => 'nullable|string|in:pending,confirmed,refused',
            'views' => 'nullable|integer',
        ]);
    
        // Mettre à jour l'annonce
        $annonce = Annonce::findOrFail($id);
        $annonce->title = $validatedData['title'];
        $annonce->description = $validatedData['description'];
        $annonce->price = $validatedData['price'];
        $annonce->location = $validatedData['location'];
        $annonce->age = $validatedData['age'];
        $annonce->image = $validatedData['image'];
        if (isset($validatedData['status'])) {
            $annonce->status = $validatedData['status'];
        }
        if (isset($validatedData['views'])) {
            $annonce->views = $validatedData['views'];
        }
        $annonce->save();
    
        return response()->json(['message' => 'Annonce mise à jour avec succès', 'data' => $annonce]);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
