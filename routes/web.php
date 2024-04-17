<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Models\Serviceprovider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\review;

Route::get('/', [ServiceController::class, 'page']); 


Route::get('/dashboard', [ServiceController::class, 'index']); 

Route::get('/categories', [CategoryController::class, 'search'])->name('search');

Route::get('/service/{id1}/{id2}', [CategoryController::class, 'show']); // Assuming you have CategoryController

// Signup user ko lagi
Route::post('/store', function (Request $req) {
     $req->validate([
        'name' => 'required',
         'email' => 'required',
         'password' => 'required',
          'address' => 'required',
         'phone_no' => 'required',

     ]);
     $parsedData = [
        'name' =>$req->name,
         'email' => $req->email,
         'password' => bcrypt($req->password),
         'address' => $req->address,
         'phone_no' => $req->phone_no,
     ];

    //  dd($parsedData);

     User::create($parsedData);
     return redirect('/login');
});

 //to check for signin
 Route::get('/signin', function (Request $req) {
     $req->validate([
         'email' => ['required', 'email'],
         'password' => 'required',
     ]);
 
     if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
         // password is correct
         $categories = Category::all(); // Fetch all categories from the database
         $results = $categories;
         $users = User::all();
        //  $results1= $users;
     
         $reviews = review::join('users', 'reviews.user_id', '=', 'users.id')
         ->select('users.name', 'reviews.comment', 'reviews.rating')
         ->get();

// Redirect to the 'welcome' view or your intended landing page
return view('welcome', compact('categories', 'results', 'reviews')); 

     } else {
         // login failed
          // If authentication fails, return the login view with an error message
        return back()->withInput()->withErrors(['email' => 'Wrong credentials. Please try again.']);
     }
 });

 Route::get('/login', [ServiceController::class, 'login'])->name('login');
 Route::post('/register', [ServiceController::class, 'register']);

 
Route::get('/serviceProvider', [adminController::class, 'index'])->name('admin.serviceProvider.index'); 


     Route::get('/booking', function(){
          return view('booking');
     });

     Route::get('/userProfile', function(){
          return view('userProfile');
     });
    
Route::post('/submit-form', [adminController::class, 'store']);

// Route::post('/review', function(){
//             return view('review');
// });
Route::post('/review',function()
{
    return view('review');
}); // Assuming you have CategoryController


Route::post('/reviewstore', [ServiceController::class, 'reviewinfo']);

    