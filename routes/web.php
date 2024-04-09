<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Models\Serviceprovider;
use Illuminate\Http\Request;

Route::get('/', [ServiceController::class, 'index']); 
Route::get('/categories', [CategoryController::class, 'search'])->name('search');

Route::get('/sewa/{id}', [CategoryController::class, 'show']); // Assuming you have CategoryController

// Route::prefix('admin')->group(function () {
//     Route::get('/serviceProvider', [adminController::class, 'index'])->name('admin.serviceProvider.index'); 

//     Route::post('/serviceProvider/submit', [adminController::class, 'store'])->name('admin.serviceProvider.store'); 
// });

     Route::get('/serviceProvider', [adminController::class, 'index'])->name('admin.serviceProvider.index'); 

     Route::post('/submit-form', [adminController::class, 'store']);
    