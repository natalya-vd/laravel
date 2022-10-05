<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News\News;

class NewsController extends Controller
{
    public function list(News $news)
    {
        return view('pages.news.index')->with('news', $news->getNewsWithSlug());
    }

    public function one($slug, $id, News $news)
    {
        return view('pages.news.one')
            ->with('news', $news->getNewsId($slug, $id));
    }
}
