<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = Article::get();  // mengambil semua data
        // $articles = Article::take(3)->get();    // mengambil data dengan jumlah tertentu
        $articles = Article::paginate(3);   // satu halaman berisi 3 data
        return view('articles/index', ['articles' => $articles]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Article $article)
    {
        return view('articles/show', compact('article'));
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
