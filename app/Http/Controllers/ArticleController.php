<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);

        if (empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')
            ->with('success', 'تم إضافة المقال بنجاح.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);

        if (empty($data['published_at'])) {
            $data['published_at'] = $article->published_at ?? now();
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')
            ->with('success', 'تم تحديث المقال بنجاح.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'تم حذف المقال بنجاح.');
    }
}

