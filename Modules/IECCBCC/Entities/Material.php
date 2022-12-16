<?php

namespace Modules\IECCBCC\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\IECCBCC\Database\factories\MaterialFactory::new();
    }
    public function materialCategory(){
        return $this->belongsTo('Modules\IECCBCC\Entities\MaterialCategory','materialCategory_id');
    }
}
