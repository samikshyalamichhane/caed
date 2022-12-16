<?php

namespace Modules\IECCBCC\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialCategory extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\IECCBCC\Database\factories\MaterialCategoryFactory::new();
    }
    public function materials(){
    return $this->hasMany('Modules\IECCBCC\Entities\Material','materialCategory_id');
    }
}
