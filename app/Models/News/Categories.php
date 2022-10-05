<?php

namespace App\Models\News;

class Categories
{
    private $category = [
        '1' => [
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        '2' => [
            'id' => 2,
            'title' => 'Наука и техника',
            'slug' => 'nauka-i-tekhnika'
        ],
        '3' => [
            'id' => 3,
            'title' => 'Путешествия',
            'slug' => 'puteshestviya'
        ],
        '4' => [
            'id' => 4,
            'title' => 'Экономика',
            'slug' => 'ekonomika'
        ],
        '5' => [
            'id' => 5,
            'title' => 'Образование',
            'slug' => 'obrazovanie'
        ]
    ];

    public function getCategories(): array
    {
        return $this->category;
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
