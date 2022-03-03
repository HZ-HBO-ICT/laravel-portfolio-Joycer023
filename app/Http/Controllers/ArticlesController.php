<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    /*
    * Function to show the articles page.
    */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }
    /*
    * Function to index the articles
    */
    public function index()
    {
        $articles = Article::latest();

        return view('articles.index', ['articles' => $articles]);
    }

    /*
     * Shows a view to create a new resource
     */
    public function create()
    {
        return view('articles.create');
    }

    /*
     * Persist the new resource
     */
    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }

    /*
     * Show a view to edit an existing resource
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    /*
     * Persist the edited resource
     */
    public function update($id)
    {
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    /*
     * Delete the resource
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/articles');
    }
}

