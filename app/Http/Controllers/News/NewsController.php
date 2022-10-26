<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Queries\NewsQueryBuilder;
use App\Queries\CategoriesQueryBuilder;

class NewsController extends Controller
{
    public function list(NewsQueryBuilder $builder)
    {
        $news = $builder->getNewsColumnsPagination(['news.id', 'news.title', 'categories.slug']);

        return view('pages.news.index')->with('news', $news);
    }

    public function one(NewsQueryBuilder $builder, CategoriesQueryBuilder $builder_category, $slug, $id)
    {
        $category_id = $builder_category->getCategoryBySlug($slug)->value('id');
        $news = $builder->getOneNews($id, $category_id);

        return view('pages.news.one')
            ->with('news', $news);
    }
}
