<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'resources';

    protected $fillable = [
        'title',
        'description',
        'link',
        'image'
    ];

    public function news()
    {
        return $this->hasMany(News::class, '`resource_id`', 'id');
    }
}
