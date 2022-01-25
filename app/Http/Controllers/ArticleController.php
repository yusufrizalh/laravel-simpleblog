<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug){
        // return $slug;
        return view('articles/show', compact('slug'));
    }
}
