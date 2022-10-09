<?php

namespace App\Models\News;

use Illuminate\Support\Facades\Storage;

class Categories
{
    public function getCategories(): array
    {
        return json_decode(Storage::disk('local')->get('categories.json'), true);
    }

    public function getCategoryById($id): ?array
    {
        $categoryList = $this->getCategories();
        if (array_key_exists($id, $categoryList)) {
            return $categoryList[$id];
        }

        return null;
    }

    public function getSlugById($id)
    {
        $categoryList = $this->getCategories();
        if (array_key_exists($id, $categoryList)) {
            return $categoryList[$id]['slug'];
        }

        return null;
    }

    public function getCategoryNameBySlug($slag)
    {
        $id = $this->getIdCategoryBySlug($slag);
        $category = $this->getCategoryById($id);
        if ($category != []) {
            return $category['title'];
        } else {
            return null;
        }
    }

    public function getIdCategoryBySlug($slug)
    {
        $id = null;
        foreach ($this->getCategories() as $category) {
            if ($category['slug'] == $slug) {
                $id = $category['id'];
                break;
            }
        }

        return $id;
    }
}
