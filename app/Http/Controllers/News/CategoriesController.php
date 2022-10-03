<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News\Categories;
use App\Models\News\News;

class CategoriesController extends Controller
{
    public function list(Categories $categories)
    {
        return view('pages.news.categories')->with('categories', $categories->getCategories());
    }

    public function newsList(News $news, Categories $category, $slug)
    {
        return view('pages.news.category')
            ->with('news', $news->getNewsByCategorySlug($slug))
            ->with('category', $category->getCategoryNameBySlug($slug));
    }
}
