<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class ImageGallery extends Model
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
    protected  function gallery()
    {
        return $this->hasMany('Modules\Gallery\Entities\Gallery','image_id');
    }
}
