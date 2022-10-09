<?php

namespace App\Models\News;

use Illuminate\Support\Facades\Storage;

class News
{
    private Categories $category;

    public function __construct(Categories $category)
    {
        $this->category = $category;
    }

    public function getNewsByCategorySlug($slug): array
    {
        $id = $this->category->getIdCategoryBySlug($slug);
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }

        return $news;
    }

    public function getNews(): array
    {
        return json_decode(Storage::disk('local')->get('news.json'), true);
    }

    public function getNewsId($slug, $id): ?array
    {
        $newsList = $this->getNews();
        $category_id = $this->category->getIdCategoryBySlug($slug);
        if (array_key_exists($id, $newsList) && $newsList[$id]['category_id'] == $category_id) {
            return $newsList[$id];
        }

        return null;
    }

    public function getNewsWithSlug()
    {
        $newsList = [];
        foreach ($this->getNews() as $item) {
            $slug = $this->category->getSlugById($item['category_id']);
            $item['slug'] = $slug;
            $newsList[] = $item;
        }

        return $newsList;
    }

    public function getNewsCategoryId($category_id)
    {
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $category_id) {
                $news[] = $item;
            }
        }

        return $news;
    }
}
