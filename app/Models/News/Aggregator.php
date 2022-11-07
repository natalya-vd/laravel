<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class Aggregator extends Model
{
    protected $table = 'aggregators';

    protected $fillable = [
        'title',
        'description',
        'link',
        'image'
    ];

    public function news()
    {
        return $this->hasMany(News::class, '`aggregator_id`', 'id');
    }
}
