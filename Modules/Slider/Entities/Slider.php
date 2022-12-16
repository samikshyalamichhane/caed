<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    
    public function scopePublished($query)
    {
        return $query->where('publish', 1);
    }
    
}
