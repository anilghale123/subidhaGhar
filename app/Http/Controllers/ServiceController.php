<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
{
    $categories = Category::all(); // Fetch all categories from the database

    return view('welcome', compact('categories')); // Pass data to the view
}
}
