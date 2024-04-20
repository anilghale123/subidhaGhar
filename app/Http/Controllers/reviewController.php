<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function review($serviceProviderId) 
    {
        $serviceProvider = ServiceProvider::findOrFail($serviceProviderId);

        // Get authenticated user ID (assuming you have authentication in place)
        $userId = auth()->id();

        return view('review', compact('serviceProvider', 'userId'));
    }

    public function store(Request $request) 
    {
       
        
        $request->validate([
            
            's_id' => 'required|exists:serviceproviders,id', 
            'user_id' => 'required|exists:users,id',                   
             
            'rating' => 'required',
            'comment' => 'required',
            
        ]);
        
        
       
        $rating = review::create([
            's_id' => $request->input('s_id'), 
            'user_id' => $request->input('user_id'),
            'comment' => $request->input('comment'),
            'rating' => $request->input('rating'),
        ]);
      
    //  dd($rating);
        
        // 3. Redirect or Handle Success
        return redirect('/dashboard');
    }
}
