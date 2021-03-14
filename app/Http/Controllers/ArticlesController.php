<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    protected function validateArticle()
    {
        return request()->validate([
            "title" => "required",
            "excerpt" => "required",
            "body" => "required",
        ]);
    }

    public function index()
    {
        // renders a list of resource
        $article = Article::take(3)->latest()->get();

        return view('articles', ['articles' => $article]);
    }

    public function show(Article $article)
    {
        // renders a specific resource
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // shows a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        // persist the new resource
        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // show a view to edit an existing resource
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // persist the edited resource
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    public function destroy()
    {
        // delete the resource
    }
}
