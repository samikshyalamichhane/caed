<?php

namespace Modules\UsefulLink\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\UsefulLink\Database\factories\LinkFactory::new();
    }
    public function category(){
        return $this->belongsTo('Modules\UsefulLink\Entities\Category');
    }
}
