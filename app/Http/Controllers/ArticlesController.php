<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::take(3)->latest()->get();

        return view('articles', ['articles' => $article]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
}
