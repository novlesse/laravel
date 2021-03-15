<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    protected function validateArticle()
    {
        return request()->validate([
            "title" => "required",
            "excerpt" => "required",
            "body" => "required",
            'tags' => 'exists:tags,id',
        ]);
    }

    public function index()
    {
        // renders a list of resource
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::first()->get();
        }

        return view('articles', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // renders a specific resource
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // shows a view to create a new resource
        return view('articles.create', ['tags' => Tag::all()]);
    }

    public function store()
    {
        // persist the new resource
        $this->validateArticle();

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1; // auth()->id();
        $article->save();

        $article->tags()->attach(request('tags'));

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
