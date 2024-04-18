<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Serviceprovider;
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

   
public function show($id1,$id2)
{
    $category = Category::findOrFail($id2);

    // Fetch related service providers 
    //$serviceProviders = Serviceprovider::all();
    $serviceProviders = $category->serviceProviders;


    return view('service', compact('category', 'serviceProviders')); 
}

public function display($id)
{
    $user = Category::findOrFail($id);

    // Fetch related service providers 
    //$serviceProviders = Serviceprovider::all();
    $serviceProviders = $user->serviceProviders;


    return view('service', compact('category', 'serviceProviders')); 
}

}
