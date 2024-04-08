<?php

namespace App\Http\Controllers;

use App\Models\Serviceprovider;
use App\Models\Category;
use Illuminate\Http\Request;


class adminController extends Controller
{
    function index()
    {
        $categories = Category::all(); // Fetch all categories from the database

        return view('admin.ServiceProvider', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone_no' => 'required', 
            'address' => 'required',
            'exp_year' => 'required|numeric',
            'category' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'c_id'  => 'required|numeric',
            // Add validation rules for other fields 
        ]);

        // Create a new Serviceprovider instance
        $serviceProvider = new Serviceprovider();

        // Fill in the data from the form submission
        $serviceProvider->name = $validatedData['name'];
        $serviceProvider->phone_no = $validatedData['phone_no'];
        $serviceProvider->address = $validatedData['address'];
        $serviceProvider->exp_year = $validatedData['exp_year'];
        $serviceProvider->category = $validatedData['category'];
        $serviceProvider->price = $validatedData['price'];
       $serviceProvider->status = $validatedData['status'];
       $serviceProvider->c_id = $validatedData['c_id'];
       

        $serviceProvider->save();

        // Redirect with a success message
        return redirect('/')->with('success', 'Service Provider data submitted successfully!'); 
    }

}