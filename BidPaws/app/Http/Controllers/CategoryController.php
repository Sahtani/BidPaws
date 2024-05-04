<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{


    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $user= Auth::user();
        $categories = $this->categoryRepository->getAllCategories();
        return view('admin.categories', compact('categories','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'name' => 'required|string|unique:categories|max:255',
        ]);

        $this->categoryRepository->createCategory($validatedData);
        return back()->with('success', 'Category created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

       $this->categoryRepository->updateCategory($id, $validatedData);

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoryRepository->deleteCategory($id);
        return back()->with('success', 'Category delted successfully.');
    }
}
