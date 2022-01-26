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

    public function store()
    {
        // $article = new Article; // memanggil model Article
        // $article->title = $request->title;
        // $article->slug = \Str::slug($request->title);
        // $article->body = $request->body;
        // $article->save();
        // return redirect()->to('/articles');

        // Article::create([
        //     'title' => $request->title,
        //     'slug' => \Str::slug($request->title),
        //     'body' => $request->body,
        // ]);
        // return back();

        // $this->validate($request, [
        //     'title' => 'required|min:8|max:50',
        //     'body' => 'required',
        // ]);
        // $article = $request->all();
        // $article['slug'] = \Str::slug($request->title);
        // Article::create($article);
        // return back();

        $attributes = request()->validate([
            'title' => 'required|min:8|max:50',
            'body' => 'required',
        ]);
        $attributes['slug'] = \Str::slug(request('title'));
        Article::create($attributes);
        session()->flash('success', 'New article is created successfully');
        return back();
    }

    public function show(Article $article)
    {
        return view('articles/show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles/edit', compact('article'));   // membuka form edit article
    }

    public function update(Article $article)
    {
        $attributes = request()->validate([
            'title' => 'required|min:8|max:50',
            'body' => 'required',
        ]);
        $article->update($attributes);
        session()->flash('success', 'Article is updated successfully');
        return back();
    }

    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('success', 'Article is deleted successfully');
        return redirect('articles');
    }
}
