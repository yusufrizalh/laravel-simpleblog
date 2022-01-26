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
        return view('articles/index', [
            'articles' => Article::latest()->paginate(3),
        ]); // data yg dibuat paling baru muncul paling depan
    }

    public function create()
    {
        return view('articles/create'); // membuka form create new article
    }

    public function store(Request $request)
    {
        // $article = new Article; // memanggil model Article
        // $article->title = $request->title;
        // $article->slug = \Str::slug($request->title);
        // $article->body = $request->body;
        // $article->save();
        // return redirect()->to('/articles');

        Article::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'body' => $request->body,
        ]);
        return back();
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
