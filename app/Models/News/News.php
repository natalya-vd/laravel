<?php

namespace App\Models\News;

use Illuminate\Support\Facades\DB;

class News
{
    private Categories $category;

    public function __construct(Categories $category)
    {
        $this->category = $category;
    }

    public function getNewsByCategorySlug($slug): array
    {
        $category_id = $this->category->getIdCategoryBySlug($slug);

        return DB::table('news')->where('category_id', '=', $category_id)->get()->toArray();
    }

    public function getNews(): array
    {
        return DB::table('news')->get()->toArray();
    }

    public function getNewsId($slug, $id)
    {
        $category_id = $this->category->getIdCategoryBySlug($slug);

        return DB::table('news')
            ->where('id', '=', $id)
            ->where('category_id', '=', $category_id)
            ->first();
    }

    public function getNewsWithSlug()
    {
        return DB::table('news')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select(['news.id', 'news.title', 'categories.slug'])
            ->get()
            ->toArray();
    }

    public function getNewsCategoryId($category_id)
    {
        return DB::table('news')->where('category_id', '=', $category_id)->get()->toArray();
    }
}
