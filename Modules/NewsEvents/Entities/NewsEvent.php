<?php

namespace Modules\NewsEvents\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class NewsEvent extends Model
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

    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
