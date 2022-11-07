<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'category_id',
        'aggregator_id',
        'title',
        'description',
        'text',
        'image',
        'is_private',
        'link',
        'guid'
    ];

    public function scopeOneNews(Builder $query, $id, $category_id): Builder
    {
        return $query->where('id', $id)
            ->where('category_id', $category_id);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function aggregator()
    {
        return $this->belongsTo(Aggregator::class, 'aggregator_id', 'id');
    }
}
