<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News\Categories;

class CategoriesController extends Controller
{
    public function list()
    {
        $categories = Categories::getCategories();
        return view('pages.news.categories')->with('categories', $categories);
    }
}
