<?php

namespace App\Http\Controllers;

use App\Models\Article;
use http\Env\Request;

class ArticlesController extends Controller
{
    /*
    * Function to show the articles page.
    */
    public function show(Article $article)
    {
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
    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));

        return redirect('/articles');
    }

    /*
     * Show a view to edit an existing resource
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /*
     * Persist the edited resource
     */
    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle($request));

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

    /**
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}

