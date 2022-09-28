<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News\News;

class NewsController extends Controller
{
    public function list()
    {
        $news = News::getNews();
        return view('pages.news.news')->with('news', $news);
    }

    public function one($categoryId, $id)
    {
        $news = News::getNewsId($id);

        return view('pages.news.news-one')->with('news', $news);
    }

    public function newsCategory($categoryId)
    {
        $news = News::getNewsCategory($categoryId);

        return view('pages.news.categories-one')->with('news', $news);
    }

    public function addNewsTemplate()
    {
        return view('pages.news.add-news');
    }
}
