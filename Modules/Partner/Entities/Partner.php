<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Partner extends Model
{
    use Sluggable;

    protected $guarded = ['id','created_at','updated_at'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function scopePublished($query)
    {
        return $query->where('publish', 1);
    }
}
