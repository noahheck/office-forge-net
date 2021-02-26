<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::published()->get();

        $articles->load('author');

        $latestArticle = $articles->shift();

        return view('blog.index', compact('articles', 'latestArticle'));
    }

    public function show(Article $article)
    {
        abort_unless($article->published, 404);

        $article->views++;

        $article->save();

        return view('blog.show', compact('article'));
    }
}
