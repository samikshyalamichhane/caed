<?php

namespace Modules\MediaClipping\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MediaClipping extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\MediaClipping\Database\factories\MediaClippingFactory::new();
    }
}
