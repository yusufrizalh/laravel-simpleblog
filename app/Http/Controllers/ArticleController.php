<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug){
        // return $slug;
        // $article = \DB::table('articles')->where('slug', $slug)->first();
        $article = \App\Article::where('slug', $slug)->first();
        // jika data tidak ditemukan maka arahkan ke halaman 404 not found
        if (is_null($article)) {
            abort(404);
        }
        // dd($article);
        return view('articles/show', compact('article'));
    }
}
