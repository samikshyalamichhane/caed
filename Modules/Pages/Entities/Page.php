<?php

namespace Modules\Pages\Entities;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;

    protected $guarded = ['id','created_at','updated_at'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function scopePublished($query)
    {
        return $query->where('publish', 1);
    }
}
