<?php

namespace Modules\UsefulLink\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\UsefulLink\Database\factories\CategoryFactory::new();
    }
    public function links(){
        return $this->hasMany('Modules\UsefulLink\Entities\Link');
    }
}
