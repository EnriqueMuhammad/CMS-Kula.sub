<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'user'])
            ->where('is_published', true)
            ->latest('published_at')
            ->paginate(5);

        return view('frontend.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('frontend.show', compact('article'));
    }

    public function category(Category $category)
    {
        $articles = $category->articles()
            ->with(['category', 'user'])
            ->where('is_published', true)
            ->latest('published_at')
            ->paginate(5);

        return view('frontend.category', compact('category', 'articles'));
    }
}