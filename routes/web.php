<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Membuat setiap route yang ada didalam aplikasi
// Route::view('/', 'welcome');
// Route::get('/', 'HomeController@index');

// khusus untuk article
Route::prefix('/articles')->middleware('auth')->group(function() {
    Route::get('/', 'ArticleController@index');
    Route::get('create', 'ArticleController@create'); // membuka form create
    Route::post('store', 'ArticleController@store');   // proses menyimpan
    Route::get('{article:slug}/edit', 'ArticleController@edit');  // membuka form edit
    Route::patch('{article:slug}/edit', 'ArticleController@update'); // proses mengubah
    Route::delete('{article:slug}/delete', 'ArticleController@destroy');  // proses menghapus
});

Route::get('/categories/{category:slug}', 'CategoryController@show');   // memfilter category
Route::get('/articles/{article:slug}', 'ArticleController@show');   // Route Wildcard

Route::view('/contact', 'contact');
Route::view('/gallery', 'gallery');

// Mengakses file views dari sub-folder: employees
Route::view('employees/index', 'employees/index');
Route::view('employees/create', 'employees/create');
Route::view('employees/show', 'employees/show');
Route::view('employees/edit', 'employees/edit');
Route::view('employees/delete', 'employees/delete');

// Mengakses file views dari sub-folder: series
Route::view('series/index', 'series/index');
Route::view('series/create', 'series/create');
Route::view('series/show', 'series/show');
Route::view('series/edit', 'series/edit');
Route::view('series/delete', 'series/delete');

// Route::get('/', function() {
//     $myName = request('name');
//     return view('home', ['name' => $myName]);
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
