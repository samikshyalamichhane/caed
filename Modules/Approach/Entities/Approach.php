<?php

namespace Modules\Approach\Entities;

use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    
    public function scopePublished($query)
    {
        return $query->where('publish', 1);
    }
}
