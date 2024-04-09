<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //for fetching dropdown itms from databse 
    public function search(Request $request)
{
    // Retrieve search query
    $query = $request->input('query');

    // Retrieve selected category ID for filtering
    $categoryId = $request->input('category');

    // Retrieve all categories
    $categories = Category::all();

    // Initialize $results with all categories if no search query provided
    if (empty($query)) {
        $results = $categories;
    } else {
        // Search for categories based on the provided query
        $results = Category::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'LIKE', "%{$query}%")
                         ->orWhere('description', 'LIKE', "%{$query}%");
            // Add more columns as needed
        })->get();
    }

    // If a category is selected for filtering, apply filtering
    if (!empty($categoryId) && $categoryId !== 'all') {
        $results = $results->where('id', $categoryId);
    }

    return view('welcome', compact('results', 'categories'));
}

   
    public function show($id)
    {
        $category = Category::findOrFail($id);

        $viewName = strtolower($category->name);  // Generate view name dynamically 

        // Handle cases where the view file might not exist
        if (!view()->exists($viewName)) { 
            return view('error.404'); // Or another suitable error view
        }

        return view($viewName, compact('category')); 
    }
}
