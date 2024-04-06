<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
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
