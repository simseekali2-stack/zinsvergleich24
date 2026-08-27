<?php

namespace App\Http\Controllers;

use App\Services\NewsDataService;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $articles = NewsDataService::getArticles();
        $featuredArticle = $articles[0] ?? null;
        $secondaryArticles = array_slice($articles, 1, 4);

        return view('pages.home', compact('featuredArticle', 'secondaryArticles'));
    }

    public function news(Request $request)
    {
        $articles = NewsDataService::getArticles();
        $category = $request->query('category');

        if ($category) {
            $articles = array_values(array_filter($articles, fn($article) => strtolower($article['category']) === strtolower($category)));
        }

        return view('pages.news-index', compact('articles', 'category'));
    }

    public function newsShow($slug)
    {
        $article = NewsDataService::findBySlug($slug);

        if (!$article) {
            abort(404);
        }

        $allArticles = NewsDataService::getArticles();
        $relatedArticles = array_values(array_filter($allArticles, fn($a) => $a['slug'] !== $slug));

        return view('pages.news-detail', compact('article', 'relatedArticles'));
    }

    public function impressum()
    {
        return view('pages.impressum');
    }

    public function datenschutz()
    {
        return view('pages.datenschutz');
    }

    public function kontakt()
    {
        return view('pages.kontakt');
    }

    public function kontaktSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        return back()->with('success', 'Ihre Nachricht wurde erfolgreich gesendet.');
    }
}
