<?php

namespace Modules\DevelopmentProject\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class ProjectCategory extends Model
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
        return $query->orderBy('created_at', 'asc');
    }

    public function projects(){
    return $this->hasMany('Modules\DevelopmentProject\Entities\Project','projectCategory_id');
    }
}
