<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Membuat setiap route yang ada didalam aplikasi
Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/gallery', 'gallery');

// Mengakses file views dari sub-folder: employees
Route::view('employees/index', 'employees/index');
Route::view('employees/create', 'employees/create');
Route::view('employees/show', 'employees/show');
Route::view('employees/edit', 'employees/edit');
Route::view('employees/delete', 'employees/delete');

// Mengakses file views dari sub-folder: series
