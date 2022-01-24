<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Membuat setiap route yang ada didalam aplikasi
Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/gallery', 'gallery');
