<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Queries\CategoriesQueryBuilder;

class CategoryController extends Controller
{
    public function list(CategoriesQueryBuilder $builder)
    {
        $categories = $builder->getCategoriesPagination();

        return view('pages.news.categories')->with('categories', $categories);
    }

    public function newsList(CategoriesQueryBuilder $builder, $slug)
    {
        $category_title = $builder->getCategoryBySlug($slug)->value('title');

        $news = $builder->getNewsBySlug($slug);

        return view('pages.news.category')
            ->with('news', $news)
            ->with('categoryTitle', $category_title);
    }
}
