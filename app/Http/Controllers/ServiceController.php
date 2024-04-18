<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ServiceController extends Controller
{

    public function page()
    {
        return view('loginsignup');
    }

    public function index(Request $req)
     {
       
    $categories = Category::all(); // Fetch all categories from the database
    $results = $categories;
    $users = User::all(); // Fetch all categories from the database


    $reviews = review::join('users', 'reviews.user_id', '=', 'users.id')
                    ->select('users.name', 'reviews.comment', 'reviews.rating')
                    ->get();
                    


    return view('welcome', compact('categories','results','reviews','users')); // Pass data to the view
        
     }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function reviewinfo()
    {
        return view('login');
    }
    
}
