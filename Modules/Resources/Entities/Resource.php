<?php

namespace Modules\Resources\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Resource extends Model
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
    
    
}
