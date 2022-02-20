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

    public function index()
    {
        $articles = Article::latest();

        return view('articles.index', ['articles' => $articles]);
    }
}
