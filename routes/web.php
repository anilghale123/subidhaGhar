<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/electrisian', function() {
    return view('electrisian');
});

Route::get('/plumber', function() {
    return view('plumber');
});

Route::get('/tutor', function() {
    return view('tutor');
});

Route::get('/carpenter', function() {
    return view('carpenter');
});