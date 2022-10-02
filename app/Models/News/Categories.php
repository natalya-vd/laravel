<?php

namespace App\Models\News;

class Categories
{
    private static $category = [
        '1' => [
            'id' => 1,
            'title' => 'Спорт',
        ],
        '2' => [
            'id' => 2,
            'title' => 'Наука и техника',
        ],
        '3' => [
            'id' => 3,
            'title' => 'Путешествия',
        ],
        '4' => [
            'id' => 4,
            'title' => 'Экономика',
        ],
        '5' => [
            'id' => 5,
            'title' => 'Образование',
        ]
    ];

    public static function getCategories(): array
    {
        return static::$category;
    }
}
