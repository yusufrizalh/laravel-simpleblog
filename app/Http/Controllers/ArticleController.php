<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug){
        // return $slug;
        $article = \DB::table('articles')->where('slug', $slug)->first();
        // dd($article);
        return view('articles/show', compact('article'));
    }
}
