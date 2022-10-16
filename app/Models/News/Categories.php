<?php

namespace App\Models\News;

use Illuminate\Support\Facades\DB;

class Categories
{
    public function getCategories(): array
    {
        return DB::table('categories')->get()->toArray();
    }

    public function getSlugById($id)
    {
        return DB::table('categories')->where('id', '=', $id)->value('slug');
    }

    public function getCategoryNameBySlug($slug)
    {
        return DB::table('categories')->where('slug', '=', $slug)->value('title');
    }

    public function getIdCategoryBySlug($slug)
    {
        return DB::table('categories')->where('slug', '=', $slug)->value('id');
    }
}
