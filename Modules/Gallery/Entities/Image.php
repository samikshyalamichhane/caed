<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Gallery\Database\factories\ImageFactory::new();
    }
    public function image(){
        return $this->belongsTo('Modules\Gallery\Entities\Image');
    }
}
