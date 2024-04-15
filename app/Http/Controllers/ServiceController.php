<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function page()
    {
        return view('loginsignup');
    }

    public function index()
{
    $categories = Category::all(); // Fetch all categories from the database
    $results = $categories;

    return view('welcome', compact('categories','results'),); // Pass data to the view
}

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
    
}
