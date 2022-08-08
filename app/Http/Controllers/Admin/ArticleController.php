<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate()->withQueryString();

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.creade');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->validated());

        return redirect()->route('articles.index')->with('success', 'Article created!');
    }

    public function edit(int $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, int $id)
    {
        Article::findOrFail($id)?->update($request->validated());

        return redirect()->route('articles.index')->with('success', 'Article updated!');
    }

    public function destroy(int $id)
    {
        Article::destroy($id);

        return redirect()->route('articles.index')->with('success', 'Article deleted!');
    }
}
