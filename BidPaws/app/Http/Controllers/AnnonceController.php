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
        $annonces = Annonce::where('status','confirmed')->with(['images', 'category'])->paginate(6);
        $categories=Category::all();
        $villesJsonPath = storage_path('villes_maroc.json');
        if (File::exists($villesJsonPath)) {
            $villes = json_decode(File::get($villesJsonPath));
        } else {
            $villes = [];
        }
        return view('allannonces', compact('annonces','categories','villes'));
    }

    public function recentAnnouncements()
    {
        $annonces = Annonce::where('status','confirmed')->with('images')->latest()->take(4)->get();
        $categories=Category::all();
        $villesJsonPath = storage_path('villes_maroc.json');
        if (File::exists($villesJsonPath)) {
            $villes = json_decode(File::get($villesJsonPath));
        } else {
            $villes = [];
        }
        return view('home', compact('annonces','categories','villes'));
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
    public function update(AnnonceRequest $request, $id)
    {

        $validatedData = $request->validated();
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
        $annonce = Annonce::findOrFail($id);
        $annonce->images()->delete();
        $annonce->delete();

        return redirect()->route('user.my-listings')->with('success', 'Announcement deleted successfully.');
    }


    public function search(Request $request)
    {
        $title = $request->input('search_title');
        $category = $request->input('search_category');
        $location = $request->input('search_location');

        $annonces = Annonce::query();

        if ($title) {
            $annonces->where('title', 'like', "%$title%");
        }

        if ($category) {
            $annonces->where('category_id', $category);
        }

        if ($location) {
            $annonces->where('location', $location);
        }
        $categories=Category::all();
        $villesJsonPath = storage_path('villes_maroc.json');
        if (File::exists($villesJsonPath)) {
            $villes = json_decode(File::get($villesJsonPath));
        } else {
            $villes = [];
        }
        $annonces = $annonces->get();
        return view('user.search',compact('annonces'));
    }
   
}
