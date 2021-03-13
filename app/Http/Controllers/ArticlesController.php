<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        // renders a list of resource
        $article = Article::take(3)->latest()->get();

        return view('articles', ['articles' => $article]);
    }

    public function show($id)
    {
        // renders a specific resource
        $article = Article::find($id);

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

        // validation
        request()->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required'],
        ]);

        //clean up
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        // show a view to edit an existing resource
        // find the article associated to id
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        // persist the edited resource
        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        // delete the resource
    }
}
