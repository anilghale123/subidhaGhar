<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request) 
    {
       
        // 1. Validation (Adjust as needed)
        $request->validate([
            'date' => 'required|date|after_or_equal:today', 
            'time' => 'required', 
            'name' => 'required', 
            'user_id' => 'required|exists:users,id',                   
            'phoneNumber' => 'required', 
            'location' => 'required',
            'notes' => 'required',
            's_id'  => 'required',
            // ...add validation for 'notes' if needed
        ]);
        
        
        // 2. Create Booking Record
        $booking = booking::create([
            'name' => $request->input('name'), 
            'user_id' => $request->input('user_id'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'phone_number' => $request->input('phoneNumber'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'), 
            's_id' => $request->input('s_id'), 

            
           
        ]);
      
     
        
        // 3. Redirect or Handle Success
        return redirect('/dashboard');
    }
    

    public function book($serviceProviderId) 
    {
        $serviceProvider = ServiceProvider::findOrFail($serviceProviderId);

        // Get authenticated user ID (assuming you have authentication in place)
        $userId = auth()->id();

        return view('booking', compact('serviceProvider', 'userId'));
    }
}
