<?php

namespace App\Models\News;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'title',
        'slug'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }
}
