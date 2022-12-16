<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoGallery extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','thumbnail_video','publish'];

    protected static function newFactory()
    {
        return \Modules\Gallery\Database\factories\VideoGalleryFactory::new();
    }
}
