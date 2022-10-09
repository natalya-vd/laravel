<?php

namespace App\Exports;

use App\Models\News\News;
use Maatwebsite\Excel\Concerns\FromArray;

class NewsExport implements FromArray
{
    private $news;
    private $category_id;

    public function __construct(News $news, $category_id)
    {
        $this->news = $news;
        $this->category_id = $category_id;
    }

    public function array(): array
    {
        return $this->news->getNewsCategoryId($this->category_id);
    }
}
