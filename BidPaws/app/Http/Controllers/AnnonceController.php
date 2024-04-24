<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use App\Http\Requests\AnnonceRequest;
use App\Models\Annonce;
use App\Models\AnnonceImage;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Client;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $annonces = Annonce::with(['images', 'category'])->paginate(6);
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
        
        $villesJsonPath = storage_path('villes_maroc.json');
        if (File::exists($villesJsonPath)) {
            $villes = json_decode(File::get($villesJsonPath));
        } else {
            $villes = [];
        }
        $categories = Category::all();
        return view('user.create', compact('villes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(AnnonceRequest $request)
    {
        $validatedData = $request->validated();
        $user = User::find(Auth::user()->id);
        $user->role = 'user';

      
        $annonce = $user->annonces()->create($validatedData);

        if ($request->hasFile('images')) {  
            foreach ($request->file('images') as $image) {
                $image = $image->store('public/annonceImages');
                $imagePath = explode("/", $image);
                // $annonceImages=AnnonceImage::create(['image_path' => $imagePath[2], 'annonce_id' => $annonce->id]);
                $annonce->images()->create(['image_path' => $imagePath[2]]);
            }
        }

         return redirect()->route('user.my-listings')->with(['success' => 'Annonce créée avec succès.']);
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $annonce = Annonce::with('category', 'images','user')->findOrFail($id);

        $annonce->increment('views');

        return view('show', compact('annonce'));
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
        $categories = Category::all();
        $annonce = Annonce::with('category', 'images')->findOrFail($id);

        return view('user.update', compact('annonce', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validated();
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
    public function destroy($id)
    {
        // avec images 
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Announcement deleted successfully.');
    }
    public function searchByVille(Request $request)
    {
        $ville = $request->input('ville');

        $annonces = Annonce::where('location', 'like', '%' . $ville . '%')->get();

        return view('home', ['annonces' => $annonces]);
    }

    public function filterByCategory($category_id)
    {
        
        $annonces = Annonce::where('category_id', $category_id)->get();

        
        return view('home', ['annonces' => $annonces]);
    }
}
