<?php

namespace Modules\Team\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function getImageSrcAttribute()
    {
        return Storage::url($this->image);
    }

    public function scopePublished($query)
    {
        return $query->where('publish', 1);
    }
}
