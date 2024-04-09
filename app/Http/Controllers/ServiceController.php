<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
{
    $categories = Category::all(); // Fetch all categories from the database
    $results = $categories;

    return view('welcome', compact('categories','results'),); // Pass data to the view
}
}
