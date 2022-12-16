<?php

namespace Modules\Frontend\Entities;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{

    protected $guarded = ['id','created_at','updated_at'];

    public function scopePublished($query)
    {
        return $query->where('publish', 1);
    }
    
}
